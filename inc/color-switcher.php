<?php function color_switcher(){
if(is_front_page()):?>
<!--Color switcher-->
<div class="color-switcher" id="choose_color"><a href="#." class="picker_close"><i class="fa fa-gear fa-spin" ></i></a>
    <div class="theme-colours">
        <p>Choose Colour style</p>
        <ul class="switch-colors">
            <li class="red"><a href="#." class="red" id="red" title="Red"></a></li>
            <li class="blue"><a href="#." class="blue" id="blue" title="Blue"></a></li>
            <li class="green"><a href="#." class="green" id="green" title="Green"></a></li>
            <li class="yellow"><a href="#." class="yellow" id="yellow" title="Yellow"></a></li>
            <li class="black active"><a href="#." class="black" id="black" title="Black"></a></li>
        </ul>
        <div class="clear"></div><!-- .clear -->

        <p>Choose Header Font</p>
        <ul class="font-family">
            <li class="header-font-1"><a href="#.">Rajdhani Font</a></li>
            <li class="header-font-2"><a href="#.">Cherry Swash Font</a></li>
            <li class="header-font-3"><a href="#.">Philosopher Font</a></li>
            <li class="header-font-4"><a href="#.">Slabo Font</a></li>
            <li class="header-font-5"><a href="#.">Dosis Font</a></li>
        </ul>
        <div class="clear"></div><!-- .clear -->
        <p>Choose Body Font</p>
        <ul class="font-family">
            <li class="body-font-1"><a href="#.">News Cycle Font</a></li>
            <li class="body-font-2"><a href="#.">Pontano Sans Font</a></li>
            <li class="body-font-3"><a href="#.">Gudea Font</a></li>
            <li class="body-font-4"><a href="#.">Quattrocento Font</a></li>
            <li class="body-font-5"><a href="#.">Khand Font</a></li>
        </ul>

        <p>Layout</p>
        <ul>
            <li><a href="#." class="wide">Wide</a></li>
            <li><a href="#." class="boxed">Boxed</a></li>
        </ul>
    </div><!-- .theme-colours-->
</div><!-- .color-switcher-->
<?php endif;
} ?>