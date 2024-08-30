<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>
<footer class="bg-[#F2F2F2]">
   <div class="px-[12px] sm:px-[40px] md:px-[50px] xl:px-[85px] pt-8 pb-4">
        <section class="grid grid-cols-1  lg:grid-cols-3 gap-4 lg:gap-3">
            <div class="col-span-1 flex flex-row">
                <div class="w-1/2">
                    <img class="w-[90px]" src="/wp-content/themes/andcowoman-outlet/img/and-co-woman-logo-blk.png" alt="">
                    <div class="space-x-[13px] flex">
                        <a href="https://www.instagram.com/andcowoman/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                <path id="Fill_1" data-name="Fill 1" d="M15,30A15,15,0,0,1,4.393,4.393,15,15,0,0,1,25.607,25.607,14.9,14.9,0,0,1,15,30ZM11.084,5a6.034,6.034,0,0,0-6.018,6.017v8.165A6.035,6.035,0,0,0,11.084,25.2h8.165a6.033,6.033,0,0,0,6.017-6.017V11.018A6.032,6.032,0,0,0,19.249,5Zm8.165,18.167H11.083A3.991,3.991,0,0,1,7.1,19.183V11.018a3.992,3.992,0,0,1,3.985-3.985h8.168a3.99,3.99,0,0,1,3.985,3.985v8.165A3.99,3.99,0,0,1,19.249,23.168Zm-4.082-13.3A5.226,5.226,0,1,0,20.392,15.1,5.232,5.232,0,0,0,15.167,9.871ZM20.4,8.662a1.252,1.252,0,1,0,1.252,1.251A1.253,1.253,0,0,0,20.4,8.662Zm-5.234,9.631A3.192,3.192,0,1,1,18.359,15.1,3.2,3.2,0,0,1,15.167,18.292Z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/people/Andcowoman/100055228670092/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                <path id="Facebook" d="M15,30A15,15,0,0,1,4.393,4.393,15,15,0,0,1,25.607,25.607,14.9,14.9,0,0,1,15,30ZM8.555,12.754v4h3.457V27.025h4.139V16.758H19.6l.517-4H16.151V10.2c0-1.17.337-1.948,1.985-1.948h2.122V4.673a29.2,29.2,0,0,0-3.016-.157h-.076a5.157,5.157,0,0,0-3.724,1.361,5.365,5.365,0,0,0-1.43,3.929v2.948Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-1/2">
                    <ul>
                        <?php foreach (wp_get_menu_array("footer-one") as $item) { ?>
                        <li>
                            <a class="text-12 leading-34 text-[#000000] font-poppins font-normal" href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-span-1 max-w-[300px]">
                <h3 class="font-12 font-bold font-poppins leading-22 uppercase">
                    <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                        BLIJF UP TO DATE
                    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                        STAY UP TO DATE
                    <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                        AUF DEM LAUFENDEN BLEIBEN
                    <?php endif; ?>
                </h3>
                <p class="py-[20px] text-12 leading-34 text-[#000000] font-poppins font-normal footer-p-medium max-w-[250px]">
                    <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                        Schrijf je in voor onze nieuwsbrief en ontvang 10% korting
                    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                        Sign up for our newsletter and receive a 10% discount
                    <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                        Melden Sie sich für unseren Newsletter an und erhalten Sie 10 % Rabatt
                    <?php endif; ?>
                </p>
                <div class="footer-form">
                    <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
                </div>
            </div>
            <div class="col-span-1 flex">
                <div class="w-1/2">
                    <ul>
                        <?php foreach (wp_get_menu_array("footer-two") as $item) { ?>
                        <li>
                            <a class="text-12 leading-34 text-[#000000] font-poppins font-normal" href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="w-1/2">
                    <ul>
                        <?php foreach (wp_get_menu_array("footer-three") as $item) { ?>
                        <li>
                            <a class="text-12 leading-34 text-[#000000] font-poppins font-normal" href="<?php echo $item["url"]; ?>"><?php echo $item["title"]; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="space-y-4 mt-7">
            <div class="grid grid-cols-5 max-w-[380px] gap-[15px] justify-center items-center mx-auto">
                <div class="col-span-1">
                    <svg id="Ideal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="40" viewBox="0 0 64 40">
                    <defs>
                        <clipPath id="clip-path">
                        <path id="Clip_6" data-name="Clip 6" d="M0,40H64V0H0Z" fill="none"/>
                        </clipPath>
                    </defs>
                    <path id="Fill_1" data-name="Fill 1" d="M60.8,40H3.2A3.2,3.2,0,0,1,0,36.8V3.2A3.2,3.2,0,0,1,3.2,0H60.8A3.2,3.2,0,0,1,64,3.2V36.8A3.2,3.2,0,0,1,60.8,40" fill="#fff"/>
                    <path id="Clip_6-2" data-name="Clip 6" d="M0,40H64V0H0Z" fill="none"/>
                    <g id="Ideal-2" data-name="Ideal" clip-path="url(#clip-path)">
                        <g id="Group" transform="translate(17 7)">
                        <path id="Path" d="M0,1.927V24.073A1.95,1.95,0,0,0,1.96,26H15.417C25.59,26,30,20.4,30,12.971,30,5.58,25.59,0,15.417,0H1.96A1.95,1.95,0,0,0,0,1.927Z" fill="#fff"/>
                        <path id="Path-2" data-name="Path" d="M0,1.234V17.6H7.243c6.576,0,9.428-3.652,9.428-8.818C16.671,3.835,13.819,0,7.243,0H1.254A1.246,1.246,0,0,0,0,1.234Z" transform="translate(9.007 4.202)" fill="#c06"/>
                        <path id="Shape" d="M1.882,22.463A1.867,1.867,0,0,1,0,20.613V1.85A1.867,1.867,0,0,1,1.882,0h11.7c11.1,0,12.76,7.025,12.76,11.208,0,7.257-4.537,11.255-12.76,11.255Z" transform="translate(1.833 1.773)"/>
                        </g>
                        <g id="Group-2" data-name="Group" transform="translate(28 17)">
                        <path id="Shape-2" data-name="Shape" d="M0,3.991V0H1.593V.01a1.915,1.915,0,0,1,.673.118,1.494,1.494,0,0,1,.543.364,2.027,2.027,0,0,1,.359.609,2.667,2.667,0,0,1,.13.865,3.126,3.126,0,0,1-.1.806,1.918,1.918,0,0,1-.313.639,1.528,1.528,0,0,1-.525.423,1.759,1.759,0,0,1-.746.158Z" fill="#fff"/>
                        <path id="Path-3" data-name="Path" d="M2.791.01V.747H.82V1.6H2.634V2.28H.82v.973H2.837V3.99H0V0H2.791Z" transform="translate(3.832)" fill="#fff"/>
                        <path id="Shape-3" data-name="Shape" d="M2.809,3.991l-.285-.885h-1.4l-.3.885H0L1.409,0h.857l1.4,3.991Z" transform="translate(7.175 0.01)" fill="#fff"/>
                        <path id="Path-4" data-name="Path" d="M.82,0V3.253H2.643V3.99H0V0H.82Z" transform="translate(11.357 0.01)" fill="#fff"/>
                        </g>
                        <circle id="Oval" cx="2" cy="2" r="2" transform="translate(21 17)"/>
                        <path id="Path-5" data-name="Path" d="M2.989,7h0A3.026,3.026,0,0,1,0,3.933V1.539A1.519,1.519,0,0,1,1.5,0h0A1.519,1.519,0,0,1,3,1.539V7Z" transform="translate(21 22)"/>
                    </g>
                    </svg>
                </div>
                <div class="col-span-1">
                    <svg id="Mastercard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="40" viewBox="0 0 64 40">
                        <defs>
                            <clipPath id="clip-path">
                            <path id="Clip_6" data-name="Clip 6" d="M0,40H64V0H0Z" fill="none"/>
                            </clipPath>
                        </defs>
                        <path id="Fill_1" data-name="Fill 1" d="M60.8,40H3.2A3.2,3.2,0,0,1,0,36.8V3.2A3.2,3.2,0,0,1,3.2,0H60.8A3.2,3.2,0,0,1,64,3.2V36.8A3.2,3.2,0,0,1,60.8,40" fill="#fff"/>
                        <path id="Fill_3" data-name="Fill 3" d="M27.4,3.746a1.318,1.318,0,0,1-1.313-1.379A1.318,1.318,0,0,1,27.4.988a1,1,0,0,1,.829.385V0H28.8V3.68h-.572V3.362A1,1,0,0,1,27.4,3.746Zm.071-2.219a.784.784,0,0,0-.8.841.8.8,0,1,0,1.588,0A.79.79,0,0,0,27.472,1.526ZM22.1,3.746a1.318,1.318,0,0,1-1.313-1.379A1.318,1.318,0,0,1,22.1.988a1,1,0,0,1,.83.385V1.055H23.5V3.68h-.571V3.362A1,1,0,0,1,22.1,3.746Zm.071-2.219a.784.784,0,0,0-.8.841.8.8,0,1,0,1.588,0A.79.79,0,0,0,22.171,1.526Zm-2.62,2.219a1.33,1.33,0,0,1-1.4-1.379,1.33,1.33,0,0,1,1.4-1.379,1.376,1.376,0,0,1,.944.313l-.274.462a1.151,1.151,0,0,0-.688-.237.788.788,0,0,0-.791.841.788.788,0,0,0,.791.841,1.151,1.151,0,0,0,.688-.236l.274.461A1.376,1.376,0,0,1,19.551,3.746Zm-5.032,0a1.29,1.29,0,0,1-1.346-1.379A1.286,1.286,0,0,1,14.48.988a1.254,1.254,0,0,1,1.247,1.379c0,.068-.005.133-.01.2l0,.024H13.766a.732.732,0,0,0,.785.644,1.25,1.25,0,0,0,.764-.275l.28.424A1.6,1.6,0,0,1,14.519,3.746ZM14.469,1.5a.678.678,0,0,0-.7.637h1.362A.649.649,0,0,0,14.469,1.5ZM12.1,3.746c-.622,0-.912-.309-.912-.972v-1.2h-.533V1.055h.533v-.8h.577v.8H12.7v.521h-.934V2.763c0,.3.124.439.379.439a1.052,1.052,0,0,0,.506-.148l.165.49A1.337,1.337,0,0,1,12.1,3.746Zm-3.027,0a1.9,1.9,0,0,1-1.137-.34l.269-.445a1.4,1.4,0,0,0,.873.275c.386,0,.6-.113.6-.319,0-.146-.142-.231-.461-.275L8.948,2.6c-.592-.084-.905-.352-.905-.775,0-.519.419-.841,1.094-.841a1.965,1.965,0,0,1,1.07.275l-.247.461A1.693,1.693,0,0,0,9.14,1.5c-.313,0-.5.115-.5.308s.22.228.445.257l.269.039c.609.088.918.352.918.786C10.273,3.409,9.8,3.746,9.075,3.746Zm-3.092,0A1.318,1.318,0,0,1,4.669,2.367,1.318,1.318,0,0,1,5.982.988a1,1,0,0,1,.83.385V1.055h.571V3.68H6.812V3.362A1,1,0,0,1,5.982,3.746Zm.071-2.219a.784.784,0,0,0-.8.841.8.8,0,1,0,1.588,0A.79.79,0,0,0,6.053,1.526ZM2.368,3.681H1.791V2.219c0-.453-.2-.692-.572-.692a.618.618,0,0,0-.643.7V3.68H0V1.055H.572v.323A.866.866,0,0,1,1.34.988a.962.962,0,0,1,.868.467,1.011,1.011,0,0,1,.9-.467h.024A.98.98,0,0,1,4.164,2.032V3.679H3.587V2.219c0-.459-.194-.692-.577-.692a.618.618,0,0,0-.643.7V3.68Zm22.456,0h-.572V1.055h.566v.319A.773.773,0,0,1,25.51.988a1.22,1.22,0,0,1,.407.072l-.176.538a.92.92,0,0,0-.356-.067c-.367,0-.561.234-.561.677v1.47Zm-7.938,0h-.571V1.055h.566v.319a.771.771,0,0,1,.691-.385,1.22,1.22,0,0,1,.407.072L17.8,1.6a.929.929,0,0,0-.357-.067c-.367,0-.561.234-.561.677v1.47Z" transform="translate(17.633 28.661)" fill="#231f20"/>
                        <path id="Clip_6-2" data-name="Clip 6" d="M0,40H64V0H0Z" fill="none"/>
                        <g id="Mastercard-2" data-name="Mastercard" clip-path="url(#clip-path)">
                            <path id="Fill_5" data-name="Fill 5" d="M0,15.55H8.652V0H0Z" transform="translate(27.673 9.709)" fill="#ff5f00"/>
                            <path id="Fill_7" data-name="Fill 7" d="M12.223,9.889A9.873,9.873,0,0,1,16,2.114a9.889,9.889,0,1,0,0,15.55,9.873,9.873,0,0,1-3.777-7.775" transform="translate(16.005 7.593)" fill="#eb001b"/>
                            <path id="Fill_8" data-name="Fill 8" d="M16,9.889A9.889,9.889,0,0,1,0,17.664,9.872,9.872,0,0,0,3.777,9.889,9.872,9.872,0,0,0,0,2.114,9.889,9.889,0,0,1,16,9.889" transform="translate(31.995 7.593)" fill="#f79e1b"/>
                        </g>
                        </svg>

                </div>
                <div class="col-span-1">
                    <svg id="Bancontact" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="40" viewBox="0 0 64 40">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.202" y1="0.546" x2="0.934" y2="-0.13" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#005ab9"/>
                        <stop offset="1" stop-color="#1e3764"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="0.061" y1="1.087" x2="0.837" y2="0.427" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#fba900"/>
                        <stop offset="1" stop-color="#ffd800"/>
                        </linearGradient>
                    </defs>
                    <path id="Fill_1" data-name="Fill 1" d="M60.8,40H3.2A3.2,3.2,0,0,1,0,36.8V3.2A3.2,3.2,0,0,1,3.2,0H60.8A3.2,3.2,0,0,1,64,3.2V36.8A3.2,3.2,0,0,1,60.8,40" fill="#fff"/>
                    <path id="Bancontact-2" data-name="Bancontact" d="M30.258,5a1.708,1.708,0,0,1-1.839-1.868A1.71,1.71,0,0,1,30.2,1.243a2.707,2.707,0,0,1,1.059.211l-.182.765a2.152,2.152,0,0,0-.793-.176c-.569,0-.877.4-.877,1.06,0,.724.323,1.1.926,1.1a2.009,2.009,0,0,0,.779-.183l.154.779a2.364,2.364,0,0,1-.961.2ZM13.189,5a1.708,1.708,0,0,1-1.838-1.868,1.71,1.71,0,0,1,1.782-1.889,2.707,2.707,0,0,1,1.059.211l-.182.765a2.152,2.152,0,0,0-.793-.176c-.569,0-.877.4-.877,1.06,0,.724.323,1.1.926,1.1a2.013,2.013,0,0,0,.779-.183L14.2,4.8a2.365,2.365,0,0,1-.961.2Zm20.2,0c-.835,0-1.264-.456-1.264-1.383V2.1h-.477V1.327h.477V.548L33.095.5v.829h.779V2.1h-.779V3.6c0,.408.168.6.484.6a1.718,1.718,0,0,0,.372-.042L34,4.937A2.682,2.682,0,0,1,33.424,5ZM23.975,5c-.835,0-1.263-.456-1.263-1.383V2.1h-.477V1.327h.477V.548L23.68.5v.829h.779V2.1H23.68V3.6c0,.408.169.6.484.6a1.733,1.733,0,0,0,.373-.042l.049.779A2.682,2.682,0,0,1,24.009,5Zm1-1.1c0-.695.569-1.1,1.41-1.11a4.39,4.39,0,0,1,.625.057V2.676c0-.428-.246-.633-.715-.633a2.469,2.469,0,0,0-.926.169l-.176-.759a3.484,3.484,0,0,1,1.214-.211,1.363,1.363,0,0,1,1.544,1.5V4.691A3.512,3.512,0,0,1,26.419,5C25.457,5,24.973,4.529,24.973,3.9ZM14.531,3.118a1.755,1.755,0,1,1,3.5,0,1.755,1.755,0,1,1-3.5,0ZM3.954,3.9c0-.695.569-1.1,1.41-1.11a4.4,4.4,0,0,1,.625.057V2.676c0-.428-.246-.633-.716-.633a2.469,2.469,0,0,0-.926.169l-.175-.759a3.484,3.484,0,0,1,1.214-.211,1.363,1.363,0,0,1,1.543,1.5V4.691A3.512,3.512,0,0,1,5.4,5C4.438,5,3.954,4.529,3.954,3.9Zm16.87,1.018V2.752c0-.484-.225-.709-.653-.709a1.474,1.474,0,0,0-.617.127V4.915h-.961V1.552a4.291,4.291,0,0,1,1.586-.309c1.024,0,1.614.506,1.614,1.439V4.915Zm-10.982,0V2.752c0-.484-.225-.709-.653-.709a1.474,1.474,0,0,0-.617.127V4.915H7.61V1.552A4.291,4.291,0,0,1,9.2,1.243c1.024,0,1.614.506,1.614,1.439V4.915ZM0,4.915V0H1.516c1.1,0,1.81.414,1.81,1.271a1.142,1.142,0,0,1-.54,1.018,1.218,1.218,0,0,1,.723,1.173c0,.99-.723,1.454-1.845,1.454Z" transform="translate(15 26)" fill="#1e3764"/>
                    <path id="blue-symbol" d="M6.753,7C11.877,7,14.438,3.5,17,0H0V7Z" transform="translate(15 17)" fill="url(#linear-gradient)"/>
                    <path id="yellow-symbol" d="M10.247,0C5.123,0,2.562,3.5,0,7H17V0Z" transform="translate(32 10)" fill="url(#linear-gradient-2)"/>
                    </svg>

                </div>
                <div class="col-span-1">
                    <svg id="Sofort" xmlns="http://www.w3.org/2000/svg" width="64" height="40" viewBox="0 0 64 40">
                    <path id="Fill_1" data-name="Fill 1" d="M60.8,40H3.2A3.2,3.2,0,0,1,0,36.8V3.2A3.2,3.2,0,0,1,3.2,0H60.8A3.2,3.2,0,0,1,64,3.2V36.8A3.2,3.2,0,0,1,60.8,40" fill="#fff"/>
                    <g id="sofort-logo-vector" transform="translate(13 8)">
                        <path id="Path" d="M36.039,25H1.961A1.966,1.966,0,0,1,0,23.045V1.955A1.968,1.968,0,0,1,1.981,0H36.019A1.968,1.968,0,0,1,38,1.955V23.05A1.969,1.969,0,0,1,36.039,25" fill="#ef809f"/>
                        <path id="Shape" d="M8.932,2.915a1.653,1.653,0,0,1,3.3,0,1.653,1.653,0,0,1-3.3,0Zm-5.664,0a1.653,1.653,0,0,1,3.3,0,1.653,1.653,0,0,1-3.3,0ZM0,3.81l.593-.585a1.122,1.122,0,0,0,.856.471.546.546,0,0,0,.607-.551c0-.36-.293-.45-.754-.58C.456,2.32.112,1.885.112,1.32A1.327,1.327,0,0,1,1.52,0,1.342,1.342,0,0,1,2.786.735l-.715.445A.673.673,0,0,0,1.495.815a.451.451,0,0,0-.487.455c0,.305.274.4.709.525.684.2,1.241.536,1.241,1.31a1.416,1.416,0,0,1-1.519,1.4A1.766,1.766,0,0,1,0,3.81Zm17.016.1a.578.578,0,1,1,.578.571A.573.573,0,0,1,17.016,3.91Zm-.577.526a1.436,1.436,0,0,1-1.566-1.5V.435h.861V.91a.759.759,0,0,0,.806.73v.806a1.064,1.064,0,0,1-.806-.3v.741a.711.711,0,0,0,.831.75v.8ZM12.7,4.43V1.4h.835V1.75a.873.873,0,0,1,.842-.39v.91a.725.725,0,0,0-.815.78V4.43Zm-5.69,0V1.555A1.439,1.439,0,0,1,8.577.055H8.7v.8a.708.708,0,0,0-.831.75V1.93a1.074,1.074,0,0,1,.806-.3v.81a.748.748,0,0,0-.806.73V4.43Z" transform="translate(9.965 17.835)" fill="#fff"/>
                        <path id="Shape-2" data-name="Shape" d="M2.056,11.1.531,9.6a1.38,1.38,0,0,1-.218-1.95l.051-.055a1.181,1.181,0,0,1,1.56-.1.273.273,0,0,1,.046.38.282.282,0,0,1-.385.045.626.626,0,0,0-.825.055l-.051.055c-.263.27-.207.78.213,1.2l1.52,1.485A.686.686,0,0,0,3.4,10.7l.05-.055a.666.666,0,0,0-.01-.95.257.257,0,0,1,0-.38.27.27,0,0,1,.385,0,1.206,1.206,0,0,1,.025,1.71l-.056.055a1.248,1.248,0,0,1-1.742.024Zm1.1-4.41-.623-5.05A1.34,1.34,0,0,1,3.47.027a1.326,1.326,0,0,1,.988.185,1.283,1.283,0,0,1,.557.815L6.094,5.583a.27.27,0,0,1-.2.325.273.273,0,0,1-.329-.2L4.477,1.138A.749.749,0,0,0,4.154.662.769.769,0,0,0,3.581.557a.8.8,0,0,0-.511.966l0,.03L3.7,6.622a.269.269,0,0,1-.239.3l-.036,0A.27.27,0,0,1,3.155,6.687Z" transform="translate(14.19 1.928)" fill="#fff"/>
                        <path id="Shape-3" data-name="Shape" d="M.09,10a.27.27,0,0,1,.274-.27A.27.27,0,0,1,.636,10a3.438,3.438,0,0,0,3.577,3.415.27.27,0,1,1,0,.54A3.982,3.982,0,0,1,.09,10Zm1.423-.77-1.2-1.76A1.38,1.38,0,0,1,.5,5.512l.076-.05c.735-.419,1.343-.1,1.84.606l1,1.47a.269.269,0,0,1-.076.375.278.278,0,0,1-.38-.076l-1-1.47c-.349-.5-.689-.68-1.094-.45L.8,5.956C.49,6.171.449,6.682.773,7.171l1.2,1.755a.689.689,0,0,0,.952.18l.061-.034A.646.646,0,0,0,3.251,8.7a.27.27,0,0,1,.522.14,1.232,1.232,0,0,1-.491.675l-.061.04a1.24,1.24,0,0,1-1.707-.325ZM6.984,7.8a.272.272,0,0,1-.212-.319L8,1.427A.743.743,0,0,0,7.491.562a.814.814,0,0,0-.977.575L5.151,5.747a.274.274,0,0,1-.339.185A.269.269,0,0,1,4.623,5.6L5.987.992A1.357,1.357,0,0,1,7.638.041a1.279,1.279,0,0,1,.9,1.495L7.309,7.587a.274.274,0,0,1-.276.218A.3.3,0,0,1,6.984,7.8Z" transform="translate(15.129 1.908)" fill="#fff"/>
                        <path id="Path-2" data-name="Path" d="M2.2,2.931a2,2,0,0,0-.963,1.8.27.27,0,0,0,.258.285.275.275,0,0,0,.289-.255,1.416,1.416,0,0,1,.871-1.435,1.939,1.939,0,0,1,.836-.1l.066.01a.271.271,0,0,0,.111-.53l-2.1-.465C.581,1.976.429,1.616.612,1.016A.6.6,0,0,1,1.1.566a1.354,1.354,0,0,1,.512,0c.051.01.086.015.1.02L4.9,1.321l.061.02a.515.515,0,0,1,.162.115A1.732,1.732,0,0,1,5.4,2.806c-.208,2.45-1.363,3.97-4.109,3.945a.268.268,0,1,0-.005.535c3.08.025,4.428-1.74,4.656-4.44a2.209,2.209,0,0,0-.415-1.76A.937.937,0,0,0,5,.786L1.848.061a1.169,1.169,0,0,0-.142-.03,1.989,1.989,0,0,0-.73,0A1.134,1.134,0,0,0,.09.856C-.174,1.721.1,2.4,1.432,2.756Z" transform="translate(17.991 8.569)" fill="#fff"/>
                    </g>
                    </svg>
                </div>
                <div class="col-span-1">
                    <svg id="Klarna" xmlns="http://www.w3.org/2000/svg" width="64" height="40" viewBox="0 0 64 40">
                    <path id="Fill_1" data-name="Fill 1" d="M60.8,40H3.2A3.2,3.2,0,0,1,0,36.8V3.2A3.2,3.2,0,0,1,3.2,0H60.8A3.2,3.2,0,0,1,64,3.2V36.8A3.2,3.2,0,0,1,60.8,40" fill="#fff"/>
                    <g id="Klarna_marketing_badge_pink_rgb.svg_" data-name="Klarna marketing badge (pink rgb.svg)" transform="translate(12 12)">
                        <rect id="Rectangle" width="40" height="16" rx="4.695" fill="#ffb3c7"/>
                        <path id="Shape" d="M.62,4.072A2.429,2.429,0,0,1,.62.829a2.5,2.5,0,0,1,3.253-.4v-.3H5.279V4.772H3.873v-.3a2.5,2.5,0,0,1-3.253-.4Z" transform="translate(28.158 6.585)"/>
                        <rect id="Rectangle-2" data-name="Rectangle" width="1.471" height="6.712" transform="translate(11.281 4.644)"/>
                        <path id="Path" d="M2.848,0A1.716,1.716,0,0,0,1.4.651V.128H0V4.771H1.417V2.331A.973.973,0,0,1,1.7,1.566a1,1,0,0,1,.771-.287.912.912,0,0,1,.973,1.042v2.45h1.4V1.818A1.851,1.851,0,0,0,2.848,0Z" transform="translate(22.814 6.586)"/>
                        <path id="Shape-2" data-name="Shape" d="M.62,4.072A2.429,2.429,0,0,1,.62.829a2.5,2.5,0,0,1,3.253-.4v-.3H5.279V4.772H3.873v-.3a2.5,2.5,0,0,1-3.253-.4Z" transform="translate(13.327 6.585)"/>
                        <path id="Path-2" data-name="Path" d="M1.439.605V0H0V4.644H1.442V2.476c0-.731.8-1.125,1.358-1.125h.017V0A1.762,1.762,0,0,0,1.439.605Z" transform="translate(19.341 6.713)"/>
                        <path id="Path-3" data-name="Path" d="M.882,0A.877.877,0,0,0,0,.873a.877.877,0,0,0,.882.873A.877.877,0,0,0,1.765.873.868.868,0,0,0,1.506.256.887.887,0,0,0,.882,0Z" transform="translate(34.047 9.71)"/>
                        <path id="Path-4" data-name="Path" d="M3.705,0H2.18A3.842,3.842,0,0,1,.6,3.112L0,3.56,2.341,6.716H4.265l-2.153-2.9A5.312,5.312,0,0,0,3.705,0Z" transform="translate(6.562 4.643)"/>
                        <rect id="Rectangle-3" data-name="Rectangle" width="1.527" height="6.715" transform="translate(4.848 4.643)"/>
                    </g>
                    </svg>
                </div>
            </div>
            <p class="text-[#000000] footer-p-small text-center font-normal font-poppins "><?php echo date("Y"); ?> © Meandco B.V. <span class="mx-1">|</span> All rights reserved <span class="mx-1">|</span> KvK NL 625 344 16 <span class="mx-1">|</span> <a class="text-[#000000] text-center font-normal font-poppins footer-p-small" href="mailto:info@meandco.nl">info@meandco.nl</a> <span class="mx-1">|</span> <a class="text-[#000000] text-center font-normal font-poppins footer-p-small" href="tel:+31203670070">+31(0)20 3670070</a></p>
        </section>
   </div>
</footer>
<style>
/* COOKIE POPUP STYLES */
.menu-footer-text {
    color: rgba(255, 255, 255, 0.6) !important;
    font-size: 9px !important;
}
</style>
<script>
/* common fuctions */
function el(selector) {
    return document.querySelector(selector)
}
function els(selector) {
    return document.querySelectorAll(selector)
}
function on(selector, event, action) {
    els(selector).forEach(e => e.addEventListener(event, action))
}
function cookie(name) {
    let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name + '='))
    return c ? c.split('=')[1] : false;
}
/* popup button hanler */
on('.cookie-popup button', 'click', () => {
    el('.cookie-popup').classList.add('cookie-popup--accepted');
    document.cookie = `cookie-accepted=true`
});
/* popup init hanler */
if (cookie('cookie-accepted') !== "true") {
    el('.cookie-popup').classList.add('cookie-popup--not-accepted');
}
/* page buttons handlers */
function _reset() {
    document.cookie = 'cookie-accepted=false';
    document.location.reload();
}
function _switchMode(cssClass) {
    el('.cookie-popup').classList.toggle(cssClass);
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
$('.slider-for').slick({
    arrows: true,
    asNavFor: '.slider-nav',
    swipe: true,
    prevArrow: '.arrow_prev',
    nextArrow: '.next_arrow',
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    fade: true,
    infinite: true,
    slickGoTo: 0,
    centerMode: true,
    adaptiveHeight: true,
});
$('.slider-nav').slick({
    slidesToShow: 100,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    swipe: false,
    arrows: false,
});
</script>
<script>
$('.quantity').on('click', '.plus', function(e) {
    $input = $(this).prev('input.qty');
    var val = parseInt($input.val());
    $input.val(val + 1).change();
});
$('.quantity').on('click', '.minus',
    function(e) {
        $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 0) {
            $input.val(val - 1).change();
        }
    });
</script>
<script>
$('.menu-link').click(function(e) {
    e.preventDefault();
    jQuery.ajax({
        url: woocommerce_params.ajax_url,
        type: 'post',
        data: {
            'action': 'ajax_update_mini_cart'
        },
        success: function(response) {
            $('#mini-cart-container').html(response);
        }
    });
});
</script>
<script>
setTimeout(function() {
    jQuery('.message-good .woocommerce-message').slideUp()
}, 2000);
</script>
<script>
document.querySelectorAll('#order_comments').forEach((textarea) => {
    textarea.addEventListener('blur', function() {
        this.classList.toggle('border-text-focus', this.value.length > 0);
    });
});
</script>
<script>
window.onscroll = function() {
    scrollFunction()
};
function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("navbar-id").style.width = "70px";
    } else {
        document.getElementById("navbar-id").style.width = "100px";
    }
}
</script>
<script>
function openNav1() {
    var element = document.getElementById("mySidebar-r");
    element.classList.add("mystyle-r");
    document.getElementById("overlay-r").style.display = "block";
    var elementCart = document.getElementById("move-mini-cart");
    elementCart.classList.add("transition-1");
}
function closeNav1() {
    var element = document.getElementById("mySidebar-r");
    element.classList.remove("mystyle-r");
    document.getElementById("overlay-r").style.display = "none";
    var elementCart = document.getElementById("move-mini-cart");
    elementCart.classList.remove("transition-1");
}
</script>
<script>
window.onscroll = function() {
    myFunctionscrollnav()
};
var navbar = document.getElementById("navbarscrol");
var content = document.getElementById("content");
var sticky = navbar.offsetTop;
function myFunctionscrollnav() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        content.classList.add("sticky-padding")
    } else {
        navbar.classList.remove("sticky");
        content.classList.remove("sticky-padding");
    }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    var elementl = document.getElementById("move-2");
    elementl.classList.add("transition-1");
    var elementla = document.getElementById("move-3");
    elementla.classList.add("transition-1");
    var elementlb = document.getElementById("move-4");
    elementlb.classList.add("transition-1");
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    var elementl = document.getElementById("move-2");
    elementl.classList.remove("transition-1");
    var elementla = document.getElementById("move-3");
    elementla.classList.remove("transition-1");
    var elementlb = document.getElementById("move-4");
    elementlb.classList.remove("transition-1");
}
</script>
<script>
function openFilter() {
    var elementFilter = document.getElementById("mySidebarfilter");
    elementFilter.classList.add("mystyle-r");
    document.getElementById("overlayfilter").style.display = "block";
    var elementFilterT = document.getElementById("move-headerfilter");
    elementFilterT.classList.add("transition-1");
    var elementFilterTa = document.getElementById("move-headerfilter-1");
    elementFilterTa.classList.add("transition-1");
}
function closeFilter() {
    var elementFilter = document.getElementById("mySidebarfilter");
    elementFilter.classList.remove("mystyle-r");
    document.getElementById("overlayfilter").style.display = "none";
    var elementFilterT = document.getElementById("move-headerfilter");
    elementFilterT.classList.remove("transition-1");
    var elementFilterTa = document.getElementById("move-headerfilter-1");
    elementFilterTa.classList.remove("transition-1");
}
</script>
<!-- <script>
  var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "value": */
x = document.getElementsByClassName("value");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script> -->
<script>
var button = document.querySelector(".balk-icon");
var elementBalk = document.querySelector(".balk");
var elementNone = document.querySelector(".header-add");
var elementTop = document.querySelector(".header-top");
var elementCart = document.querySelector(".cart-add");
var elementNavi = document.querySelector(".navi");
var elementMain = document.querySelector(".overlay-header");
var elementSearch = document.querySelector(".button-search-add");
var elementSearchOne = document.querySelector(".button-one-search");
var elementSearchNoneimg = document.querySelector(".img-close");
button.addEventListener("click", function() {
    elementBalk.classList.add("balk-big");
    elementNone.classList.add("none-op");
    elementTop.classList.add("none-fixed");
    elementNavi.classList.add("fixed-navi");
    elementCart.classList.add("none");
    elementSearchOne.classList.add("none");
    elementMain.classList.add("overlay-grey");
    elementSearch.classList.add("add");
    elementSearchNoneimg.classList.add("addop");
});
elementMain.addEventListener("click", function() {
    elementBalk.classList.remove("balk-big");
    elementNone.classList.remove("none-op");
    elementTop.classList.remove("none-fixed");
    elementNavi.classList.remove("fixed-navi");
    elementCart.classList.remove("none");
    elementSearchOne.classList.remove("none");
    elementMain.classList.remove("overlay-grey");
    elementSearch.classList.remove("add");
    elementSearchNoneimg.classList.remove("addop");
});
elementSearchNoneimg.addEventListener("click", function() {
    elementBalk.classList.remove("balk-big");
    elementNone.classList.remove("none-op");
    elementTop.classList.remove("none-fixed");
    elementNavi.classList.remove("fixed-navi");
    elementCart.classList.remove("none");
    elementSearchOne.classList.remove("none");
    elementMain.classList.remove("overlay-grey");
    elementSearch.classList.remove("add");
    elementSearchNoneimg.classList.remove("addop");
});
</script>
<script>
const currentLocation = location.href;
const menuItem = document.querySelectorAll('li.cat-item a')
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "active-marker"
    }
}
</script>
<script>
$('.widget-container.woocommerce.widget_product_categories .buttonwidget button').click(function() {
    $('.product-categories li.cat-item').toggleClass('blockwidget')
    $('.buttonwidget').toggleClass('widgetbuttonstyle')
});
</script>
<script>
const currentLocationA = location.href;
const menuItemA = document.querySelectorAll('li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term  a')
const menuLengthA = menuItemA.length
for (let i = 0; i < menuLengthA; i++) {
    if (menuItemA[i].href === currentLocatioA) {
        menuItemA[i].className = "active-marker"
    }
}
</script>
<?php wp_footer(); ?>
</body>
</html>