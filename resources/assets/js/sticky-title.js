function setTransform(el, value) {
    el.style.transition = value;
    ['webkit','ms', 'Moz', 'O'].forEach(vendor => {
        el.style[`${vendor}Transform`] = value;
    });
}

function  limit(n, min, max) {
    return Math.min(Math.max(n,min), max);
}

function transform(el, { theta, translateX, translateY }) {
    setTransform(el, `rotate3d(0,0,1,${theta}deg) translate3d(${translateX}px,${translateY}px, 0)`);
}

function handleScroll(el) {
    let {
        initialPosition,
        initialSize,
        props: {
            paddingTop=0,
            anchorMode='center',
            relativeAnchorX=0
        },
        placeholder,
        isSticky
    } = el._stickyTitleState;
    let scrollY = window.pageYOffset;
    let dy = scrollY - (initialPosition.top-paddingTop+relativeAnchorX);
    console.log(initialPosition, scrollY, dy);
    let d = limit(dy/90,0,1);
    let theta = -90*d;
    let translateX = -(initialSize.width/2+paddingTop)*d;
    let translateY = -((anchorMode==='center'?initialSize.height/2:0)-relativeAnchorX)*d;


    if(!isSticky && dy>90) {
        el._stickyTitleState.isSticky = true;
        el.style.position = 'fixed';
        el.style.top = `${paddingTop/2+initialSize.width/2}px`;
        transform(el, { theta, translateX:0, translateY });
        placeholder.style.display = 'block';
    }
    else if(isSticky && dy<90) {
        el._stickyTitleState.isSticky = false;
        placeholder.style.display = 'none';
        el.style.position = 'static';
        el.style.top = '0';
    }
    if(!el._stickyTitleState.isSticky) {
        transform(el, { theta, translateX, translateY });
    }

}

function createPlaceholder(el) {
    let res = document.createElement('div');
    res.setAttribute('style', `display:none;width:${el.offsetWidth}px;height:${el.offsetHeight}px`);
    return res;
}

export default {
    inserted(el, { value={} }) {
        el._stickyTitleState = {
            initialPosition: el.getBoundingClientRect(),
            initialSize: { width:el.offsetWidth, height:el.offsetHeight },
            props: value,
            placeholder: createPlaceholder(el)
        };
        el._stickyTitleScrollListener = () => {
            handleScroll(el);
        };
        el.parentNode.appendChild(el._stickyTitleState.placeholder);
        window.addEventListener('scroll', el._stickyTitleScrollListener);
    },
    unbind(el) {
        el._stickyTitleState = null;
        window.removeEventListener('scroll', el._stickyTitleScrollListener);
    }
}