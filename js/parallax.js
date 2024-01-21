/**
 * File parallax.js.
 *
 * Handle parallax. 
 * 
 */
"use strict";

const paraImage = document.getElementsByClassName("parallax-img")[0];

if (paraImage) {
    
    window.onscroll = () => {
    const value = window.scrollY;
    // 数字が大きいほど、コンテンツフローとのズレが小さい = 3D効果低い　1=ズレなし
    paraImage.style.top = value * 0.5 + "px";
    // console.log('scrollY:',value);
    };
}