function setTransform(el, value) {
    el.style.transform = value;
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


// dy: distance from scrollY to "starting point" Y (top of the title)
function getTransformData(state, { dy }) {
    let d = limit(dy/state.props.duration,0,1);
    return {
        theta: -90*d,
        translateX: -(state.initialRect.width/2+state.props.paddingTop) * d,
        translateY: -(state.initialRect.width/2-state.initialRect.height/2-state.props.relativeAnchorX) * d
    }
}

function setSticky(el, { state, dy }) {
    let { theta, translateY } = getTransformData(state, { dy });
    state.isSticky = true;
    el.style.position = 'fixed';
    el.style.top = `${state.initialRect.width/2 + state.props.paddingTop/2+state.props.endOffset}px`;
    transform(el, { theta, translateX:0, translateY });
    state.placeholder.style.display = 'block';
}

function setStatic(el, { state }) {
    state.isSticky = false;
    state.placeholder.style.display = 'none';
    el.style.position = 'static';
    el.style.top = '0';
}

const defaultProps = {
    paddingTop:0,
    relativeAnchorX:0,
    startOffset:0,
    endOffset:0,
    duration:90
};

function handleScroll(el) {
    let {
        initialRect,
        hasContainer,
        containerRect,
        props: {
            paddingTop,
            startOffset,
            duration
        },
        isSticky,
        touchTop,
        touchBottom
    } = el._stickyTitleState;
    let scrollY = window.pageYOffset;
    let dy = scrollY - (initialRect.y - paddingTop + startOffset);

    console.log(dy);
    if(!isSticky && dy>duration) {
        setSticky(el, { state:el._stickyTitleState, dy });
    }
    else if(isSticky && dy<duration) {
        setStatic(el, { state:el._stickyTitleState });
    }

    if(hasContainer) {
        let containerBottom = containerRect.y+containerRect.height;
        let titleBottom = initialRect.width+paddingTop;
        if(!touchBottom && scrollY > containerBottom-titleBottom) {
            el.style.position = 'absolute';
            el.style.top='auto';
            el.style.bottom = `${initialRect.width/2}px`;
            el._stickyTitleState.touchBottom = true
        }
        else if(touchBottom && scrollY < containerBottom-titleBottom) {
            setSticky(el, { state:el._stickyTitleState });
            el.style.bottom = 'auto';
            el._stickyTitleState.touchBottom = false;
        }
    }

    /// Apply animation
    if(!el._stickyTitleState.isSticky) {
        transform(el, getTransformData(el._stickyTitleState, { dy }));
    }
}

function createPlaceholder(el) {
    let res = document.createElement('div');
    res.setAttribute('style', `display:none;width:${el.offsetWidth}px;height:${el.offsetHeight}px`);
    return res;
}

function getRect(el) {
    let box = el.getBoundingClientRect();
    let top = box.top + window.pageYOffset;
    let left = box.left + window.pageXOffset;
    return {
        width:box.width, height:box.height, top, left, x:left, y:top
    }
}
function findAncestor(el, cls) {
    // noinspection StatementWithEmptyBodyJS
    while ((el = el.parentElement) && !el.classList.contains(cls));
    return el;
}

export default {
    inserted(el, { value={} }) {
        el._stickyTitleState = {
            initialRect: getRect(el),
            props: { ...defaultProps, ...value },
            placeholder: createPlaceholder(el),
            hasContainer: false
        };
        if(value.container) {
            let container = findAncestor(el, value.container.slice(1));
            if(container) {
                el._stickyTitleState.hasContainer = true;
                el._stickyTitleState.containerRect = getRect(container);
            }
        }
        //debugger;
        //console.log(el._stickyTitleState);
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