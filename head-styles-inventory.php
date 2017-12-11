<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 12/10/17
 * Time: 1:38 PM
 */
?>
<style type="text/css">
    body {
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
        background: #f8f8f8;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
    }

    body * {
        box-sizing: inherit;
    }

    /*        .wrapper {
			  width: 40em;
			  margin: 4em auto;
			  background: #ffffff;
			  padding: 4em;
			  border-radius: 8px;
			  border: 1px solid #f5f5f5;
			}
			.wrapper > :first-child {
			  margin-top: 0;
			}
			.wrapper > :last-child {
			  margin-bottom: 0;
			}*/

    .desc {
        margin: 4em auto;
        font-size: 1.2em;
    }

    .todo {
        background: #f9f9f9;
        padding: 1em;
        border-radius: 4px;
        color: #ccc;
        font-style: italic;
        font-weight: lighter;
        font-size: .9em;
    }

    .todo ul {
        margin: .4em 0;
        padding: 0 1em;
    }

    .todo ul li {
        list-style-position: inside;
    }

    h1 {
        margin: 0;
    }

    footer {
        margin: 4em auto;
        text-align: center;
        font-size: .9em;
    }

    a {
        text-decoration: none;
        color: #2196F3;
    }

    a:hover {
        text-decoration: underline;
    }

    .emoticon-face {
        background: #FFEB3B;
        border-radius: 100%;
        width: 1.7em;
        height: 1.7em;
        transform: rotate(90deg);
        display: inline-block;
        vertical-align: middle;
        line-heigh: 1;
        margin: -.4em .2em 0;
        text-align: center;
        border: 1px solid #FDD835;
        padding-left: .1em;
        -webkit-font-smoothing: antialiased;
    }

    .emoticon-face--no-rotation {
        transform: rotate(0deg);
    }

    code {
        padding: .2em .3em;
        background: #f5f5f5;
        margin: 0 .2em;
        border-radius: 4px;
        font-size: .95em;
        font-family: 'Source Code Pro';
    }

    .tac {
        text-align: center;
    }

    /* .wrapper {
	   width: 68em;
	 }*/

    * {
        box-sizing: border-box;
    }

    body {
        background-color: black;
        font-family: 'Open Sans', Arial, sans-serif;
    }

    .product-grid {
        width: 60em;
        /*margin: 2rem auto;*/
    }

    .product-grid.product-grid--flexbox .product-grid__wrapper {
        display: flex;
        flex-wrap: wrap;
    }

    .product-grid.product-grid--flexbox .product-grid__title {
        height: auto;
    }

    .product-grid.product-grid--flexbox .product-grid__title:after {
        display: none;
    }

    .product-grid__wrapper {
        margin-left: -1rem;
        margin-right: -1rem;
    }

    .product-grid__product-wrapper {
        padding: 1rem;
        float: left;
        width: 33.33333%;
        /*or
		width: 50%; <-----------------------------------------------------------------------------------Changes MADE -------------- */
    }

    .product-grid__product {
        padding: 1rem;
        position: relative;
        cursor: pointer;
        background: #fff;
        border-radius: 4px;
        margin-bottom: 30px;
    }

    .product-grid__product:hover {
        box-shadow: 0px 0px 0px 1px #eee;
        z-index: 50;
    }

    .product-grid__product:hover .product-grid__extend {
        display: block;
    }

    .product-grid__img-wrapper {
        width: 100%;
        text-align: center;
        /*padding-top: 1rem;
		padding-bottom: 1rem;
		height: 150px; <----------------------------------------------------------------------------------------------------------------------Changes MADE*/
    }

    .product-grid__img {
        max-width: 100%;
        height: auto;
        max-height: 165px;
    }

    .product-grid__title {
        margin-top: .875rem;
        display: block;
        font-size: 1.125em;
        color: #222;
        height: 3em;
        overflow: hidden;
        position: relative;
    }

    .product-grid__title:after {
        content: "";
        display: block;
        position: absolute;
        bottom: 0;
        right: 0;
        width: 2.4em;
        height: 1.5em;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), white 50%);
    }

    .product-grid__price {
        color: #E91E63;
        font-weight: bold;
        letter-spacing: .4px;
    }

    .product-grid__extend-wrapper {
        position: relative;
    }

    .product-grid__extend {
        display: none;
        position: absolute;
        padding: 0 1rem 1rem 1rem;
        margin: .4375rem -1rem 0;
        box-shadow: 0px 0px 0px 1px #eee;
        background: #fff;
        border-radius: 0 0 4px 4px;
    }

    .product-grid__extend:before {
        content: "";
        height: .875rem;
        width: 100%;
        position: absolute;
        top: -.4375rem;
        left: 0;
        background: #fff;
    }

    .product-grid__description {
        font-size: .875em;
        margin-top: .4375rem;
        margin-bottom: 0;
    }

    .product-grid__btn {
        display: inline-block;
        font-size: .875em;
        color: #777;
        background: #eee;
        padding: .5em .625em;
        margin-top: .875rem;
        margin-right: .625rem;
        cursor: pointer;
        border-radius: 4px;
    }

    .product-grid__btn i.fa {
        margin-right: .3125rem;
    }

    .product-grid__add-to-cart {
        color: #fff;
        background: #E91E63;
    }

    .product-grid__add-to-cart:hover {
        background: #ee4c83;
    }

    .product-grid__view {
        color: #777;
        background: #eee;
    }

    .product-grid__view:hover {
        background: white;
    }

</style>