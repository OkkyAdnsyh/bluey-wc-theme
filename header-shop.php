<?php
/**
 * Main head and navigation
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(  ); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(  ); ?>
</head>
<body <?php body_class( ); ?> >
    <div class="wrapper">
        <nav class="nav-wrapper">
            <ul class="nav-container">
                <?php
                    $menu = wp_get_nav_menu_items( 'main-menu' );
                ?>
                <li class="nav-item">
                    <a href="<?php echo esc_url($menu[0]->url); ?>" class="nav-link"><?php echo esc_html($menu[0]->title); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url($menu[1]->url); ?>" class="nav-link"><?php echo esc_html($menu[1]->title); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url(get_home_url( )); ?>" class="nav-link">
                    <svg width="185" height="41" viewBox="0 0 185 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.4829 22.7625C18.4829 23.9752 18.2962 25.188 17.9228 26.4008C17.5494 27.5202 16.9893 28.5464 16.2425 29.4793C15.4958 30.4122 14.5623 31.1585 13.5355 31.6249C12.4153 32.1847 11.2018 32.3712 9.80154 32.3712C8.40132 32.3712 7.18779 32.0914 6.25431 31.5316C5.32084 30.9719 4.57405 30.3189 4.01396 29.5726V31.0652C4.01396 31.7182 3.82727 32.1847 3.45388 32.5578C3.08048 32.931 2.61374 33.1175 2.24035 33.1175C1.58692 33.1175 1.02683 32.931 0.653436 32.6511C0.186696 32.1847 0 31.7182 0 31.0652V1.95907C0 1.39933 0.186696 0.932889 0.560088 0.559733C0.840132 0.279867 1.21352 0.0932889 1.77361 0C2.42705 0 2.98714 0.0932889 3.45388 0.466444C3.92062 0.8396 4.10731 1.30604 4.10731 1.95907V16.6054C4.6674 15.5792 5.41418 14.8329 6.44101 14.1799C7.46784 13.6202 8.58801 13.3403 9.70819 13.3403C11.1084 13.3403 12.3219 13.5269 13.4421 13.9933C14.5623 14.4598 15.4958 15.1128 16.2425 15.9524C16.9893 16.792 17.5494 17.8182 17.9228 18.9376C18.2962 20.1504 18.4829 21.3632 18.4829 22.7625ZM14.6556 22.9491C14.6556 20.99 14.1889 19.4974 13.2554 18.4712C12.3219 17.445 11.2018 16.9786 9.70819 16.9786C7.84123 16.9786 6.53436 17.5383 5.69423 18.7511C4.85409 19.9638 4.4807 21.5497 4.4807 23.4155C4.4807 24.9081 4.94744 26.1209 5.78757 26.9605C6.62771 27.8001 7.84123 28.3598 9.3348 28.4531C11.1084 28.4531 12.4153 27.8934 13.3488 26.8672C14.2822 26.0276 14.749 24.6283 14.6556 22.9491Z" fill="#5591A1"/>
                    <path d="M26.6977 34.6103C25.3908 34.517 24.644 33.864 24.644 32.558V3.82501C24.644 2.61225 25.2975 1.95923 26.511 1.95923C27.9112 1.95923 28.658 2.61225 28.9381 3.91829V32.2781C28.8447 33.7707 28.0979 34.517 26.6977 34.6103Z" fill="#5591A1"/>
                    <path d="M36.126 15.579C36.4061 15.2992 36.8728 15.1126 37.4329 15.1126C38.1797 15.1126 38.7398 15.2992 39.0198 15.579C39.2998 15.8589 39.4865 16.232 39.4865 16.7918V25.5609C39.4865 27.3334 39.7666 28.4529 40.42 29.1992C41.0735 29.8522 42.0069 30.2254 43.3138 30.2254C44.434 30.2254 45.4608 29.7589 46.3943 28.826C47.0477 28.2663 47.5145 27.3334 47.7012 26.1207C47.7945 25.6542 47.7945 25.0945 47.8879 24.4415C47.8879 23.7884 47.9812 23.0421 47.9812 22.2025V16.6985C47.9812 15.579 48.6346 15.0193 50.0349 15.0193C50.6883 15.0193 51.155 15.2059 51.4351 15.4857C51.7151 15.8589 51.9018 16.232 51.9018 16.6985V33.3039C51.9018 33.7703 51.7151 34.1435 51.3417 34.4234C50.9683 34.7032 50.5016 34.7965 49.9415 34.7965C48.728 34.7965 48.1679 34.3301 48.1679 33.3039V31.5314C46.7677 33.2106 44.6207 33.8636 41.6335 33.5838C37.5262 33.1173 35.5659 30.4119 35.5659 25.2811V16.8851C35.5659 16.4186 35.7526 15.9522 36.126 15.579Z" fill="#5591A1"/>
                    <path d="M74.2112 21.2699C74.2112 22.2028 74.0245 22.8558 73.5578 23.1357C73.0911 23.5088 72.4376 23.6954 71.5975 23.6954H60.5824C60.7691 25.2813 61.4226 26.4941 62.4494 27.4269C63.4762 28.3598 64.8764 28.9196 66.7434 29.1061C67.7702 29.1994 68.7971 29.1061 69.8239 28.9196C70.8507 28.733 71.8775 28.4531 72.811 28.08C73.3711 27.8001 73.8378 27.8001 74.2112 27.8934C74.5846 27.9867 74.8647 28.3598 75.0514 28.9196C75.1447 29.386 75.1447 29.8525 74.8647 30.2256C74.5846 30.5988 74.2112 30.9719 73.7445 31.2518C70.9441 32.8377 67.8636 33.3041 64.3163 32.6511C63.0095 32.3713 61.8893 31.9981 60.8625 31.2518C59.8356 30.5988 58.9955 29.7592 58.3421 28.733C57.6886 27.8001 57.1285 26.6806 56.7552 25.5612C56.3818 24.3484 56.1951 23.1357 56.1951 21.9229C56.1951 20.337 56.3818 18.9377 56.6618 17.6316C56.9419 16.3256 57.5019 15.2061 58.2487 14.1799C58.9955 13.247 59.929 12.5007 61.0492 11.8477C62.1693 11.1947 63.6629 10.9148 65.4365 10.8215C67.0234 10.8215 68.3303 11.1014 69.4505 11.6611C70.5707 12.2209 71.4108 12.9672 72.1576 13.8068C72.811 14.7397 73.2778 15.8591 73.5578 17.1652C74.1179 18.4712 74.3046 19.8705 74.2112 21.2699ZM70.5707 20.2437C70.5707 16.3256 68.7037 14.3665 65.0631 14.3665C63.6629 14.3665 62.5427 14.833 61.7959 15.8591C61.0492 16.8853 60.5824 18.2846 60.3957 20.1504H70.5707V20.2437Z" fill="#5591A1"/>
                    <path d="M86.1609 39.741C85.4141 40.7672 84.574 41.1403 83.5472 40.9538C82.427 40.3007 81.9602 39.4611 82.3336 38.6215L86.2543 30.9719L77.6662 19.3108C77.0128 18.4712 77.0128 17.6315 77.5729 16.792C77.9463 16.3255 78.413 16.0456 78.8798 15.9524C79.4399 15.8591 79.9066 16.0456 80.28 16.5121L87.9345 27.147L93.4421 16.1389C93.9088 15.206 94.7489 14.9262 95.7758 15.2993C96.9893 15.9524 97.3627 16.6987 97.0826 17.6315L86.1609 39.741Z" fill="#5591A1"/>
                    <path d="M162.131 14.7697C162.411 15.1428 162.504 15.516 162.411 15.8891C162.317 16.2623 162.224 16.5421 161.944 16.7287C161.104 17.5683 160.264 17.5683 159.517 16.9153C158.117 15.516 156.623 14.8629 154.85 14.8629C152.516 14.8629 150.836 15.516 149.622 16.9153C148.502 18.2213 147.942 19.9938 148.128 22.2328C148.222 23.8187 148.782 25.1247 149.902 26.1509C151.022 27.1771 152.516 27.7368 154.476 27.7368C156.716 27.7368 158.863 27.3637 160.824 26.5241C161.291 26.3375 161.757 26.2442 162.224 26.3375C162.691 26.4308 162.971 26.8039 163.251 27.5502C163.438 28.0167 163.344 28.3898 163.064 28.8563C162.784 29.3227 162.411 29.6026 161.944 29.8825C159.517 31.0019 156.997 31.4684 154.383 31.3751C151.489 31.3751 149.155 30.6288 147.475 29.0429C145.701 27.4569 144.768 25.218 144.581 22.2328C144.488 19.0609 145.235 16.4489 146.915 14.4898C147.848 13.4636 148.969 12.624 150.369 12.0643C151.676 11.5045 153.263 11.2247 155.13 11.318C155.69 11.318 156.25 11.4113 156.997 11.5978C157.65 11.7844 158.397 11.971 159.05 12.3441C159.704 12.624 160.357 12.9972 160.917 13.4636C161.477 13.9301 161.851 14.2099 162.131 14.7697Z" fill="#5591A1"/>
                    <path d="M184.721 25.218C184.721 28.0167 183.881 30.3489 182.2 32.1214C180.333 34.0804 177.813 34.92 174.639 34.8267C169.505 34.3603 166.798 31.0952 166.331 25.0314C166.331 23.912 166.425 22.6992 166.705 21.5797C166.985 20.367 167.358 19.3408 168.012 18.3146C168.572 17.2884 169.318 16.4488 170.345 15.7958C171.372 15.1428 172.492 14.5831 173.892 14.3965C175.573 14.2099 177.066 14.3032 178.467 14.7696C179.867 15.2361 180.987 15.9824 181.92 16.9153C182.854 17.9415 183.507 19.1542 184.067 20.5536C184.534 21.9529 184.721 23.4455 184.721 25.218ZM180.614 25.871C180.707 25.0314 180.614 24.1918 180.52 23.2589C180.427 22.326 180.147 21.4864 179.773 20.6468C179.4 19.9005 178.84 19.2475 178.187 18.7811C177.533 18.3146 176.6 18.0348 175.573 18.0348C173.892 18.128 172.679 18.8744 171.932 19.9938C171.092 21.2066 170.719 22.6059 170.625 24.2851C170.532 26.7106 171.092 28.4831 172.399 29.6026C172.866 30.069 173.332 30.4422 173.892 30.6287C174.359 30.8153 175.013 30.9086 175.666 30.9086C177.253 30.722 178.467 30.2556 179.307 29.416C179.96 28.5764 180.427 27.3636 180.614 25.871Z" fill="#5591A1"/>
                    <path d="M131.883 22.1398C131.883 22.233 131.696 22.5129 131.51 22.8861C131.23 23.3525 131.043 23.819 130.67 24.2854C130.39 24.7518 130.11 25.2183 129.829 25.6847C129.549 26.0579 129.456 26.3378 129.456 26.3378C129.269 26.431 128.803 27.0841 128.056 28.2968C128.429 28.67 128.709 28.9498 128.989 29.1364C129.269 29.4163 129.549 29.6029 129.829 29.7894C130.11 29.976 130.39 30.1626 130.67 30.2559C130.95 30.3492 131.323 30.5357 131.696 30.629C132.163 31.0022 132.35 31.4686 132.35 32.0284C132.35 32.4948 132.163 32.9613 131.883 33.2411C131.603 33.6143 131.23 33.7076 130.763 33.7076C129.549 33.6143 128.243 32.9613 126.842 31.8418L125.816 30.9089C124.789 31.9351 124.042 32.5881 123.482 32.868C123.295 33.0545 123.015 33.2411 122.548 33.521C122.175 33.7076 121.708 33.8941 121.241 34.0807C120.775 34.2673 120.215 34.3606 119.655 34.5472C119.094 34.6405 118.534 34.7337 118.068 34.7337L116.014 34.3606C115.081 34.174 114.24 33.8941 113.494 33.521C112.747 33.1478 112.187 32.5881 111.627 32.0284C111.16 31.4686 110.693 30.8156 110.506 30.1626C110.226 29.5096 110.133 28.8566 110.133 28.2035C110.133 27.7371 110.226 27.0841 110.506 26.3378C110.693 25.5914 111.067 24.8451 111.627 24.0988C112.093 23.3525 112.747 22.5129 113.494 21.7666C114.24 21.0203 115.174 20.3673 116.201 19.7142C116.014 19.4344 115.827 19.1545 115.734 18.7814C115.641 18.5015 115.454 18.1283 115.361 17.7552C115.267 17.382 115.174 16.9156 115.081 16.4491C115.081 15.1431 115.267 14.1169 115.547 13.2773C115.827 12.4377 116.294 11.7847 116.761 11.3183C117.228 10.8518 117.694 10.4787 118.254 10.2921C118.814 10.1055 119.188 10.0122 119.655 10.0122C119.841 10.0122 120.121 10.0122 120.401 10.1055C120.681 10.1988 120.961 10.1988 121.335 10.2921C121.615 10.3854 121.895 10.4787 122.082 10.4787C122.268 10.5719 122.455 10.5719 122.548 10.5719C122.828 10.7585 123.108 10.9451 123.388 11.3183C123.669 11.6914 123.949 12.0646 124.135 12.4377C124.322 12.8109 124.602 13.2773 124.695 13.7438C124.882 14.2102 124.882 14.5834 124.882 14.8632C124.882 15.5162 124.789 16.1693 124.695 16.729C124.602 17.2887 124.415 17.7552 124.135 18.1283C123.855 18.5948 123.575 18.9679 123.108 19.4344C122.642 19.8075 122.175 20.274 121.522 20.7404L124.415 24.2854C124.602 24.472 125.069 24.8451 125.535 25.4049C126.096 24.7518 126.469 24.2854 126.749 23.9122C127.029 23.5391 127.216 23.1659 127.402 22.7928C127.589 22.4196 127.776 22.1398 127.963 21.7666C128.149 21.3934 128.429 20.927 128.803 20.3673C129.176 19.7142 129.549 19.4344 130.203 19.4344C130.67 19.4344 131.043 19.621 131.416 19.9941C131.79 20.3673 131.976 20.8337 131.976 21.3002C131.976 21.7666 131.976 21.9532 131.883 22.1398ZM123.482 28.5767C123.015 27.9237 122.455 27.3639 121.895 26.8975L120.495 25.0317C120.121 24.6586 119.468 23.9122 118.534 22.5129C117.974 22.6995 117.508 23.0726 117.041 23.4458C116.574 23.819 116.107 24.2854 115.641 24.8451C115.267 25.3116 114.894 25.8713 114.707 26.431C114.427 26.9908 114.334 27.5505 114.334 28.2035C114.334 29.1364 114.614 29.8827 115.267 30.4425C115.921 31.0022 116.667 31.2821 117.694 31.2821C118.254 31.2821 118.814 31.1888 119.375 31.0955C119.935 30.9089 120.495 30.7223 120.961 30.5357C121.522 30.2559 121.988 29.976 122.362 29.6961C122.735 29.4163 123.202 28.9498 123.482 28.5767ZM121.428 15.2364C121.335 14.8632 121.241 14.4901 120.961 14.2102C120.681 13.9303 120.308 13.7438 119.841 13.7438C119.001 13.7438 118.628 14.3968 118.628 15.7961C118.628 16.1693 118.721 16.5424 118.814 16.9156C118.908 17.2887 119.094 17.7552 119.375 18.4082C120.775 17.7552 121.428 16.8223 121.428 15.6095V15.2364Z" fill="#5591A1"/>
                    </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url($menu[2]->url); ?>" class="nav-link"><?php echo esc_html($menu[2]->title); ?></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo esc_url($menu[3]->url); ?>" class="nav-link"><?php echo esc_html($menu[3]->title); ?></a>
                </li>
            </ul>
        </nav>