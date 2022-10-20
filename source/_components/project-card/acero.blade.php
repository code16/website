@props([
    // slots
    'title',
    'link' => null,
])

<x-project-card.aside {{ $attributes->class('text-white') }} style="background-color: #BC1A3A">
    <x-slot:img src="/assets/img/projects/acero/banner.jpg"></x-slot:img>

    <x-slot:logo>
        <svg class="max-w-full" width="250" fill="currentColor" viewBox="0 0 119 28"  xmlns="http://www.w3.org/2000/svg"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M24.1183 6.2457C26.4094 7.59384 28.9446 16.1666 22.5134 17.7222C22.5134 17.7222 29.1307 15.4061 24.7579 7.93952C24.7579 7.93952 23.5833 4.94365 19.3618 5.39303C15.617 5.79632 11.4071 3.97575 8.03448 4.62102C7.16225 4.78233 1.92891 7.66298 2.24291 14.4728C2.56854 21.2827 6.88314 20.7526 8.76715 21.8127C10.6395 22.8613 11.8955 21.444 13.5818 21.1098C15.838 20.6604 16.3613 21.2942 21.3388 19.7386C25.3162 18.4942 25.0603 17.1691 25.0603 17.1691C25.8046 18.7131 20.9899 21.0292 15.8845 21.2366C10.7791 21.444 12.7329 23.8637 7.55766 22.1123C2.38246 20.3609 1.32416 15.9016 1.92891 12.4909C2.53365 9.09177 4.53395 5.30085 6.94129 4.32143C10.3023 2.96177 9.80219 5.0704 17.5824 4.73624C22.6646 4.51731 23.2345 5.72718 24.1183 6.2457Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M26.0112 17.9761C23.7202 22.5045 14.5327 21.8247 14.5327 21.8247C15.8934 22.1358 23.1154 22.6428 25.9066 19.4049C27.0463 18.0914 27.0695 16.8008 26.709 15.7408C25.7321 12.7103 23.5574 11.9383 21.5338 9.65683C19.487 7.35232 19.9405 5.38196 19.4288 3.96468C17.1029 -2.17685 9.65991 0.795973 9.65991 0.795973C9.65991 0.795973 6.17101 2.32848 3.31011 6.78771C-1.96975 15.0264 -1.65575 23.8642 9.5785 22.2741C9.5785 22.2741 1.64707 23.023 1.00744 18.1029C0.69344 15.6716 0.170105 12.2955 3.42641 6.92598C3.42641 6.92598 7.31072 0.842062 11.5904 0.438772C14.5909 0.150708 18.9985 0.738358 18.9985 5.08237C19.3125 8.80416 22.1269 10.8782 22.1269 10.8782C23.7667 12.042 27.4649 14.3004 26.0112 17.9761Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11.1799 22.1471C11.052 20.1421 10.3891 18.9899 9.07492 18.529C7.58632 17.9989 6.57454 17.1002 6.55128 16.3166C6.52802 15.5216 9.57499 13.5512 17.2041 13.4245C24.8331 13.2862 25.3681 16.7199 25.3681 16.7199C25.2634 16.4088 24.2749 14.692 20.4836 14.0582C15.0875 13.1134 9.7727 14.6574 8.22595 15.4294C6.67921 16.2014 7.45839 17.0656 8.12128 17.7224C8.78418 18.3792 10.7263 17.9874 11.2846 19.7504C11.4241 20.1767 11.4823 20.5915 11.5055 20.9718C11.5055 20.9487 11.5171 20.9142 11.5171 20.8796C11.7614 19.5084 12.4708 17.6878 13.1453 17.3306C13.8198 16.9849 14.2036 16.8006 15.2038 16.5586C16.1923 16.3166 15.9132 16.1784 16.2272 15.994C16.2272 15.994 15.9015 16.8352 14.378 17.008C12.8546 17.1808 12.4243 19.0129 12.1103 19.8886C11.7846 20.7644 10.7612 25.7191 10.0518 26.6985C9.3424 27.6779 9.7727 26.9059 9.58662 27.1594C9.41218 27.4014 9.23773 27.966 9.26099 27.3322C9.29588 26.6985 10.0402 26.3874 10.1797 25.2582C10.3193 24.4631 10.8194 23.2648 11.1799 22.1471Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M16.7786 12.4682C16.7786 12.4682 15.6854 11.9727 16.674 10.4402C17.6625 8.91924 17.8951 6.46493 14.8714 6.75299C11.8476 7.04106 9.20771 9.12664 7.13763 12.5143C7.13763 12.5143 11.6267 6.246 15.8017 7.16781C17.3136 7.61719 16.3018 9.7143 16.1274 10.3826C15.9297 11.0394 15.6854 12.4682 16.7786 12.4682Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M15.4065 11.5002C15.4065 11.5002 14.825 13.3208 17.9069 13.0212C17.9069 13.0212 24.1055 12.3068 23.5356 15.4755C22.9774 18.6327 18.7791 18.1373 17.9534 18.0566C17.1277 17.9759 14.9762 18.2986 14.4412 19.0821C14.4412 19.0821 16.2787 17.9183 18.0232 18.3447C19.7792 18.771 23.0937 18.4714 23.838 16.1554C24.5823 13.8393 22.8262 12.8599 20.1165 12.7101C17.43 12.5488 15.6507 13.5858 15.4065 11.5002Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M20.8576 17.63C20.8576 17.63 13.9961 20.9255 9.16983 20.1074C4.33189 19.2893 5.9019 14.3922 7.33235 13.021C7.33235 13.021 4.35515 15.4753 5.82049 18.3905C6.77412 20.2111 8.5302 21.0753 13.1007 20.4185C17.6711 19.7732 20.8576 17.63 20.8576 17.63Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M17.0911 18.5637C17.0911 18.5637 13.765 18.944 13.4394 22.7003C13.1254 26.4567 12.8346 26.6641 12.8346 26.6641C12.8346 26.6641 12.3346 27.5398 13.5091 27.5052C14.6837 27.4707 17.2772 27.6205 19.6612 27.1596C22.0337 26.7102 26.325 26.6295 27.488 27.5052C27.488 27.5052 23.3827 26.5258 20.1497 27.4361C16.9283 28.3464 13.4045 27.8509 13.1486 27.8509C12.9044 27.8509 11.9391 27.5744 12.3694 26.4452C12.7997 25.3275 13.0789 23.6337 13.0789 22.3777C13.0905 21.1217 14.1488 18.5637 17.0911 18.5637Z" /><path d="M37.2442 2.77694C37.2442 0.990939 38.7096 0 40.6168 0C42.3962 0 43.5359 0.622219 44.1057 1.15226L43.2219 2.81151C42.6753 2.38517 41.71 1.93579 40.7331 1.93579C40.0237 1.93579 39.5934 2.31603 39.5934 2.71933C39.5934 4.2403 44.5593 3.41068 44.5593 6.62548C44.5593 8.423 43.0939 9.54069 40.8378 9.54069C39.1399 9.54069 37.4303 8.63041 37 7.98514L38.1397 6.46416C38.6863 7.05181 40.0819 7.59338 41.0006 7.59338C41.6751 7.59338 42.2101 7.30531 42.2101 6.74071C42.2101 5.28886 37.2442 6.09544 37.2442 2.77694Z" /><path d="M51.4675 9.33281C50.1185 12.5937 49.2579 13.3772 47.9088 13.3772C47.0715 13.3772 46.4551 13.0546 45.9318 12.6744L46.6877 10.9114C46.9319 11.0497 47.2808 11.234 47.653 11.234C48.2461 11.234 48.6764 10.7731 49.0602 9.81676L49.2695 9.33281L45.0247 0.22998H47.839L49.9789 5.20773C50.165 5.65711 50.2813 6.08345 50.4325 6.5213C50.5139 6.09497 50.5953 5.64559 50.7581 5.18469L52.4095 0.22998H55.0843L51.4675 9.33281Z" /><path d="M63.8968 7.97333C63.1176 9.01036 61.7336 9.55192 60.245 9.55192C57.2679 9.55192 55.2559 7.6507 55.2559 4.78158C55.2559 2.13139 57.2213 0.0112305 60.0125 0.0112305C61.5243 0.0112305 62.8501 0.391477 63.7107 1.24415L62.6059 3.08776C61.9081 2.41945 61.1522 2.20052 60.3148 2.20052C59.0123 2.20052 57.7563 3.19146 57.7563 4.7931C57.7563 6.41778 59.0239 7.40873 60.4079 7.40873C61.408 7.40873 62.1872 6.94782 62.7803 6.29103L63.8968 7.97333Z" /><path d="M69.7224 0C72.7693 0 74.7231 2.03949 74.7231 4.77035C74.7231 7.5012 72.7577 9.54069 69.7224 9.54069C66.687 9.54069 64.7216 7.5012 64.7216 4.77035C64.71 2.05102 66.6754 0 69.7224 0ZM69.7224 7.38597C71.1761 7.38597 72.2344 6.34894 72.2344 4.77035C72.2344 3.23784 71.1528 2.17777 69.7224 2.17777C68.3384 2.17777 67.2336 3.19175 67.2336 4.77035C67.222 6.30285 68.2919 7.38597 69.7224 7.38597Z" /><path d="M90.4271 9.33383H88.0779V3.98735C88.0779 2.85814 87.6127 2.24744 86.5079 2.24744C85.624 2.24744 84.9379 2.67378 84.6122 3.296C84.6122 3.43427 84.6355 3.7569 84.6355 3.96431V9.3223H82.2863V3.81451C82.2863 2.85814 81.7513 2.23592 80.7512 2.23592C79.9138 2.23592 79.2393 2.60464 78.8323 3.20382V9.31078H76.4831V0.207946H78.8323V1.22193C79.4835 0.496009 80.5651 0.0466309 81.7164 0.0466309C83.1236 0.0466309 84.0656 0.668851 84.3913 1.49848C85.0425 0.645806 86.0659 0.0466309 87.4964 0.0466309C89.1711 0.0466309 90.4387 0.876255 90.4387 3.36513V9.33383H90.4271Z" /><path d="M96.9481 0C99.9951 0 101.949 2.03949 101.949 4.77035C101.949 7.5012 99.9835 9.54069 96.9481 9.54069C93.9012 9.54069 91.9474 7.5012 91.9474 4.77035C91.9474 2.05102 93.9128 0 96.9481 0ZM96.9481 7.38597C98.4019 7.38597 99.4601 6.34894 99.4601 4.77035C99.4601 3.23784 98.3786 2.17777 96.9481 2.17777C95.5642 2.17777 94.4594 3.19175 94.4594 4.77035C94.4594 6.30285 95.5293 7.38597 96.9481 7.38597Z" /><path d="M103.417 0.230655H105.766V1.11789C106.196 0.53024 106.766 0.0693359 107.871 0.0693359C108.627 0.0693359 108.999 0.196084 109.301 0.415013L108.464 2.6043C108.01 2.33928 107.766 2.25863 107.278 2.25863C106.464 2.25863 106.033 2.70801 105.766 3.22652V9.33349H103.417V0.230655Z" /><path d="M118.244 8.42271C117.326 9.19472 116.023 9.55192 114.732 9.55192C111.767 9.55192 109.79 7.6507 109.79 4.78158C109.79 2.13139 111.627 0.0112305 114.651 0.0112305C117.023 0.0112305 119 1.69353 119 4.24002C119 4.80462 118.954 5.1503 118.861 5.49598H112.22C112.43 6.86716 113.523 7.61613 114.976 7.61613C116.105 7.61613 117.035 7.21284 117.57 6.78651L118.244 8.42271ZM112.139 3.92891H116.651C116.674 2.81122 115.895 1.94703 114.546 1.94703C113.139 1.94703 112.383 2.74208 112.139 3.92891Z" /></g><g><path d="M37.5599 19.4158C38.3507 18.9549 39.6067 18.54 40.8046 18.54C43.5259 18.54 44.4795 19.9112 44.4795 22.3194V27.8618H42.4327V26.8248C41.9443 27.5161 40.9674 28.0001 39.7114 28.0001C38.0367 28.0001 36.8272 26.963 36.8272 25.2116C36.8272 23.2067 38.3158 22.2618 40.1766 22.2618C40.9906 22.2618 41.8163 22.5269 42.2583 22.8495C42.3164 21.3285 41.9094 20.4989 40.5371 20.4989C39.4788 20.4989 38.8043 20.8215 38.1297 21.1211L37.5599 19.4158ZM42.2815 25.2001V24.2668C41.8745 23.9672 41.3395 23.8174 40.665 23.8174C39.8858 23.8174 39.1997 24.1861 39.1997 24.9466C39.1997 25.638 39.7695 26.0182 40.5022 26.0182C41.4907 26.0297 41.9908 25.6034 42.2815 25.2001Z" /><path d="M60.548 27.8739H58.1988V22.5274C58.1988 21.3982 57.7337 20.7875 56.6288 20.7875C55.745 20.7875 55.0588 21.2138 54.7332 21.836C54.7332 21.9743 54.7565 22.2969 54.7565 22.5043V27.8623H52.4073V22.3546C52.4073 21.3982 51.8723 20.776 50.8721 20.776C50.0348 20.776 49.3603 21.1447 48.9533 21.7439V27.8508H46.6041V18.748H48.9533V19.762C49.6045 19.0361 50.6861 18.5867 51.8374 18.5867C53.2446 18.5867 54.1866 19.2089 54.5122 20.0385C55.1635 19.1858 56.1869 18.5867 57.6174 18.5867C59.292 18.5867 60.5597 19.4163 60.5597 21.9052V27.8739H60.548Z" /></g></svg>
    </x-slot:logo>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    {{ $slot }}

    @if($link)
        <x-slot:footer>
            <x-card.button :attributes="$link->attributes" light>
                {{ $link }}
            </x-card.button>
        </x-slot:footer>
    @endif
</x-project-card.aside>
