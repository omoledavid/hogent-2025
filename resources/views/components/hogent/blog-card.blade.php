@props(['post'])
<div class="swiper-slide">
    <div class="blog-article-item style-2 hover-img ">
        <div class=" image-wrap ">
            <a href="{{ route('blog.show', $post->slug) }}">
                <img class="lazyload" data-src="{{ asset($post->featurePhoto) }}"
                     src="{{ asset($post->featurePhoto) }}" alt="{{ $post->photo_alt_text }}">
            </a>
            <div class="box-tag">
                <div class="tag-item text-4 text-white fw-6">{{$post->categories[0]['name']}}</div>
            </div>
        </div>
        <div class="article-content">
            <div class="time">
                <div class="icons">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2450_13848)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.03497 3.8631C6.08651 3.83315 6.12412 3.78402 6.13959 3.72645C6.15505 3.66887 6.14712 3.60751 6.11752 3.55576L5.70832 2.8471C5.67837 2.79555 5.62923 2.75795 5.57164 2.74253C5.51405 2.72711 5.45269 2.73512 5.40098 2.7648C5.34943 2.79475 5.31183 2.8439 5.29641 2.90149C5.28099 2.95908 5.289 3.02044 5.31869 3.07214L5.72788 3.78081C5.75788 3.83224 5.80698 3.86974 5.86449 3.88516C5.922 3.90057 5.98327 3.89264 6.03497 3.8631ZM12.6009 15.2355C12.6524 15.2055 12.69 15.1564 12.7055 15.0988C12.721 15.0412 12.713 14.9799 12.6834 14.9281L12.2742 14.2195C12.2443 14.1679 12.1951 14.1303 12.1376 14.1149C12.08 14.0995 12.0186 14.1075 11.9669 14.1372C11.9154 14.1672 11.8778 14.2163 11.8624 14.2739C11.847 14.3315 11.855 14.3928 11.8846 14.4445L12.2938 15.1532C12.3237 15.2047 12.3728 15.2422 12.4304 15.2576C12.4879 15.273 12.5492 15.2651 12.6009 15.2355ZM3.86377 6.0343C3.89339 5.98258 3.90136 5.92125 3.88595 5.86367C3.87053 5.8061 3.83298 5.75696 3.78148 5.72696L3.07282 5.31776C3.0211 5.28814 2.95976 5.28017 2.90219 5.29559C2.84462 5.311 2.79547 5.34856 2.76548 5.40006C2.73585 5.45178 2.72788 5.51311 2.7433 5.57069C2.75872 5.62826 2.79627 5.6774 2.84777 5.7074L3.55643 6.11659C3.60817 6.14615 3.66948 6.15408 3.72703 6.13867C3.78459 6.12326 3.83373 6.08575 3.86377 6.0343ZM15.2364 12.6C15.266 12.5482 15.274 12.4869 15.2586 12.4293C15.2432 12.3718 15.2056 12.3226 15.1541 12.2926L14.4454 11.8834C14.3937 11.8538 14.3324 11.8458 14.2748 11.8612C14.2172 11.8767 14.1681 11.9142 14.1381 11.9657C14.1084 12.0174 14.1004 12.0788 14.1158 12.1364C14.1312 12.194 14.1688 12.2431 14.2204 12.2731L14.9291 12.6823C14.9808 12.7119 15.0421 12.72 15.0997 12.7045C15.1573 12.6891 15.2064 12.6515 15.2364 12.6ZM3.06926 9.00001C3.06906 8.94038 3.04528 8.88326 3.00312 8.8411C2.96096 8.79894 2.90384 8.77517 2.84422 8.77496H2.02583C1.9662 8.77517 1.90908 8.79894 1.86692 8.8411C1.82476 8.88326 1.80098 8.94038 1.80078 9.00001C1.80078 9.12371 1.90213 9.22505 2.02583 9.22505H2.84422C2.90384 9.22485 2.96096 9.20108 3.00312 9.15892C3.04528 9.11676 3.06906 9.05963 3.06926 9.00001ZM16.2011 9.00001C16.2009 8.94043 16.1771 8.88334 16.135 8.84119C16.0929 8.79904 16.0359 8.77523 15.9763 8.77496H15.1579C15.0983 8.77517 15.0412 8.79894 14.999 8.8411C14.9568 8.88326 14.9331 8.94038 14.9329 9.00001C14.9329 9.12396 15.0342 9.22505 15.1579 9.22505H15.9763C16.0359 9.22479 16.0929 9.20098 16.135 9.15883C16.1771 9.11667 16.2009 9.05959 16.2011 9.00001ZM3.86403 11.966C3.83407 11.9144 3.78495 11.8768 3.72737 11.8614C3.66979 11.8459 3.60844 11.8538 3.55669 11.8834L2.84803 12.2926C2.79647 12.3226 2.75888 12.3717 2.74345 12.4293C2.72803 12.4869 2.73604 12.5483 2.76573 12.6C2.79568 12.6515 2.84482 12.6891 2.90242 12.7045C2.96001 12.72 3.02137 12.7119 3.07307 12.6823L3.78173 12.2731C3.83322 12.2431 3.87076 12.194 3.88618 12.1365C3.9016 12.0789 3.89364 12.0177 3.86403 11.966ZM15.2364 5.40006C15.2064 5.34851 15.1573 5.31091 15.0997 5.29544C15.0422 5.27998 14.9808 5.28791 14.9291 5.31751L14.2204 5.7267C14.1688 5.75665 14.1312 5.8058 14.1158 5.86339C14.1004 5.92098 14.1084 5.98234 14.1381 6.03404C14.168 6.0856 14.2172 6.12319 14.2748 6.13862C14.3324 6.15404 14.3937 6.14603 14.4454 6.11634L15.1541 5.70715C15.2056 5.6772 15.2431 5.6281 15.2585 5.57057C15.274 5.51304 15.266 5.45174 15.2364 5.40006ZM6.03522 14.1372C5.9835 14.1075 5.92217 14.0996 5.8646 14.115C5.80702 14.1304 5.75788 14.168 5.72788 14.2195L5.31869 14.9281C5.28907 14.9798 5.2811 15.0412 5.29651 15.0988C5.31193 15.1563 5.34948 15.2055 5.40098 15.2355C5.4527 15.2651 5.51404 15.2731 5.57161 15.2576C5.62918 15.2422 5.67833 15.2047 5.70832 15.1532L6.11752 14.4445C6.14707 14.3928 6.15501 14.3315 6.1396 14.2739C6.12418 14.2164 6.08667 14.1672 6.03522 14.1372ZM12.6009 2.76455C12.5492 2.73493 12.4878 2.72696 12.4303 2.74237C12.3727 2.75779 12.3235 2.79534 12.2935 2.84685L11.8843 3.55551C11.8547 3.60723 11.8468 3.66856 11.8622 3.72613C11.8776 3.78371 11.9151 3.83285 11.9666 3.86285C12.0183 3.89254 12.0797 3.90055 12.1373 3.88512C12.1949 3.8697 12.244 3.8321 12.274 3.78055L12.6832 3.07189C12.7129 3.02019 12.7209 2.95883 12.7055 2.90124C12.69 2.84364 12.6524 2.7945 12.6009 2.76455ZM9.00093 14.9317C8.94131 14.9319 8.88419 14.9557 8.84203 14.9978C8.79986 15.04 8.77609 15.0971 8.77589 15.1567V15.9751C8.77589 16.0988 8.87723 16.2002 9.00093 16.2002C9.06056 16.2 9.11768 16.1762 9.15984 16.134C9.202 16.0919 9.22578 16.0347 9.22598 15.9751V15.1567C9.22578 15.0971 9.202 15.04 9.15984 14.9978C9.11768 14.9557 9.06056 14.9319 9.00093 14.9317ZM9.00093 1.80011C8.94131 1.80031 8.88419 1.82409 8.84203 1.86625C8.79986 1.90841 8.77609 1.96553 8.77589 2.02515V2.84354C8.77589 2.96724 8.87723 3.06859 9.00093 3.06859C9.06056 3.06839 9.11768 3.04461 9.15984 3.00245C9.202 2.96029 9.22578 2.90317 9.22598 2.84354V2.0249C9.22578 1.9653 9.20199 1.9082 9.15983 1.86608C9.11766 1.82396 9.06053 1.80024 9.00093 1.80011ZM9.00093 3.4567C8.94137 3.45697 8.88433 3.48073 8.84219 3.52282C8.80005 3.56491 8.77622 3.62193 8.77589 3.68149V9.00001C8.77616 9.05961 8.79995 9.1167 8.8421 9.15884C8.88424 9.20099 8.94133 9.22479 9.00093 9.22505C9.06058 9.22492 9.11774 9.20117 9.15992 9.15899C9.20209 9.11682 9.22584 9.05965 9.22598 9.00001V3.68149C9.22571 3.62191 9.20191 3.56485 9.15975 3.52275C9.1176 3.48064 9.06051 3.4569 9.00093 3.4567Z"
                                  fill="#5C5E61"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.0019 8.54993C9.06189 8.54851 9.12156 8.55909 9.17739 8.58106C9.23323 8.60304 9.28412 8.63595 9.32705 8.67787C9.36998 8.7198 9.40409 8.76988 9.42739 8.82519C9.45068 8.88049 9.46268 8.93989 9.46268 8.99989C9.46268 9.0599 9.45068 9.1193 9.42739 9.1746C9.40409 9.2299 9.36998 9.27999 9.32705 9.32191C9.28412 9.36384 9.23323 9.39675 9.17739 9.41872C9.12156 9.4407 9.06189 9.45128 9.0019 9.44986C8.88441 9.44706 8.77268 9.39843 8.69057 9.31435C8.60846 9.23027 8.5625 9.11741 8.5625 8.99989C8.5625 8.88237 8.60846 8.76952 8.69057 8.68544C8.77268 8.60136 8.88441 8.55272 9.0019 8.54993Z"
                                  fill="#5C5E61"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12.7417 9.00001C12.7414 8.94045 12.7177 8.8834 12.6756 8.84126C12.6335 8.79912 12.5765 8.7753 12.5169 8.77496H8.99848C8.93888 8.77523 8.88179 8.79903 8.83965 8.84117C8.7975 8.88332 8.7737 8.9404 8.77344 9.00001C8.77344 9.12396 8.87478 9.22505 8.99848 9.22505H12.5169C12.5765 9.22485 12.6336 9.20107 12.6757 9.1589C12.7178 9.11673 12.7416 9.05961 12.7417 9.00001Z"
                                  fill="#5C5E61"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9 0C13.9705 0 18 4.02946 18 9C18 13.9705 13.9705 18 9 18C4.02946 18 0 13.9705 0 9C0 4.02946 4.02946 0 9 0ZM9 0.899924C13.4735 0.899924 17.1001 4.52654 17.1001 9C17.1001 13.4735 13.4735 17.1001 9 17.1001C4.52654 17.1001 0.899924 13.4735 0.899924 9C0.899924 4.52654 4.52654 0.899924 9 0.899924Z"
                                  fill="#5C5E61"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2450_13848">
                                <rect width="18" height="18" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p class="fw-5">{{ $post->formattedPublishedDate() }}</p>
            </div>
            <h4 class="title  ">
                <a href="{{ route('blog.show', $post->slug) }}" class="line-clamp-2">{{ $post->title }}</a>
            </h4>
            <a href="{{ route('blog.show', $post->slug) }}" class="tf-btn-link"><span>Read More</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2450_13860)">
                        <path
                            d="M10.0013 18.3334C14.6037 18.3334 18.3346 14.6024 18.3346 10C18.3346 5.39765 14.6037 1.66669 10.0013 1.66669C5.39893 1.66669 1.66797 5.39765 1.66797 10C1.66797 14.6024 5.39893 18.3334 10.0013 18.3334Z"
                            stroke="#F1913D" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.66797 10H13.3346" stroke="#F1913D"
                              stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M10 13.3334L13.3333 10L10 6.66669" stroke="#F1913D"
                              stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2450_13860">
                            <rect width="20" height="20" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
    </div>
</div>
