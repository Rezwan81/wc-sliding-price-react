<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

// remove quantity from all products
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );
function wc_remove_all_quantity_fields( $return, $product ) 
{
    return( true );
}
// remove the price from single product page for all products
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );


add_action('woocommerce_before_add_to_cart_button', 'custom_data_hidden_fields');
function custom_data_hidden_fields() {
    echo '
    <p>MINIMUM PRICE: <strong>$100</strong><br>
    SUGGESTED PRICE: <strong>$150</strong></p>
    <link href="'.get_stylesheet_directory_uri().'/static/css/main.2810db1a.chunk.css" rel="stylesheet" />
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <script>
        !(function (e) {
            function r(r) {
                for (var n, u, a = r[0], c = r[1], l = r[2], s = 0, p = []; s < a.length; s++) (u = a[s]), Object.prototype.hasOwnProperty.call(o, u) && o[u] && p.push(o[u][0]), (o[u] = 0);
                for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
                for (f && f(r); p.length; ) p.shift()();
                return i.push.apply(i, l || []), t();
            }
            function t() {
                for (var e, r = 0; r < i.length; r++) {
                    for (var t = i[r], n = !0, a = 1; a < t.length; a++) {
                        var c = t[a];
                        0 !== o[c] && (n = !1);
                    }
                    n && (i.splice(r--, 1), (e = u((u.s = t[0]))));
                }
                return e;
            }
            var n = {},
                o = { 1: 0 },
                i = [];
            function u(r) {
                if (n[r]) return n[r].exports;
                var t = (n[r] = { i: r, l: !1, exports: {} });
                return e[r].call(t.exports, t, t.exports, u), (t.l = !0), t.exports;
            }
            (u.e = function (e) {
                var r = [],
                    t = o[e];
                if (0 !== t)
                    if (t) r.push(t[2]);
                    else {
                        var n = new Promise(function (r, n) {
                            t = o[e] = [r, n];
                        });
                        r.push((t[2] = n));
                        var i,
                            a = document.createElement("script");
                        (a.charset = "utf-8"),
                            (a.timeout = 120),
                            u.nc && a.setAttribute("nonce", u.nc),
                            (a.src = (function (e) {
                                return u.p + "static/js/" + ({}[e] || e) + "." + { 3: "0002836f" }[e] + ".chunk.js";
                            })(e));
                        var c = new Error();
                        i = function (r) {
                            (a.onerror = a.onload = null), clearTimeout(l);
                            var t = o[e];
                            if (0 !== t) {
                                if (t) {
                                    var n = r && ("load" === r.type ? "missing" : r.type),
                                        i = r && r.target && r.target.src;
                                    (c.message = "Loading chunk " + e + " failed.\n(" + n + ": " + i + ")"), (c.name = "ChunkLoadError"), (c.type = n), (c.request = i), t[1](c);
                                }
                                o[e] = void 0;
                            }
                        };
                        var l = setTimeout(function () {
                            i({ type: "timeout", target: a });
                        }, 12e4);
                        (a.onerror = a.onload = i), document.head.appendChild(a);
                    }
                return Promise.all(r);
            }),
                (u.m = e),
                (u.c = n),
                (u.d = function (e, r, t) {
                    u.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t });
                }),
                (u.r = function (e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                }),
                (u.t = function (e, r) {
                    if ((1 & r && (e = u(e)), 8 & r)) return e;
                    if (4 & r && "object" == typeof e && e && e.__esModule) return e;
                    var t = Object.create(null);
                    if ((u.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: e }), 2 & r && "string" != typeof e))
                        for (var n in e)
                            u.d(
                                t,
                                n,
                                function (r) {
                                    return e[r];
                                }.bind(null, n)
                            );
                    return t;
                }),
                (u.n = function (e) {
                    var r =
                        e && e.__esModule
                            ? function () {
                                  return e.default;
                              }
                            : function () {
                                  return e;
                              };
                    return u.d(r, "a", r), r;
                }),
                (u.o = function (e, r) {
                    return Object.prototype.hasOwnProperty.call(e, r);
                }),
                (u.p = "/"),
                (u.oe = function (e) {
                    throw (console.error(e), e);
                });
            var a = (this["webpackJsonpwc-sliding-price-react"] = this["webpackJsonpwc-sliding-price-react"] || []),
                c = a.push.bind(a);
            (a.push = r), (a = a.slice());
            for (var l = 0; l < a.length; l++) r(a[l]);
            var f = c;
            t();
        })([]);
    </script>
    <script src="'.get_stylesheet_directory_uri().'/static/js/2.abb9960f.chunk.js"></script>
    <script src="'.get_stylesheet_directory_uri().'/static/js/main.9b497509.chunk.js"></script>
        <style>
            .slideBlock .strack{
                height: 28px;
            }
            .slideBlock .Price{
                top: 2px;
            }
            .App{
                margin: 0;
            }
            .slideBlock input[type=range]::-webkit-slider-thumb{
                margin-top: -9px;
            }
        </style>';
}

// Logic to Save products custom fields values into the cart item data
add_action( 'woocommerce_add_cart_item_data', 'save_custom_data_hidden_fields', 10, 2 );
function save_custom_data_hidden_fields( $cart_item_data, $product_id ) {
    
    $data = array();

    if( isset( $_REQUEST['price_prod'] ) ) {
        $cart_item_data['custom_data']['price_prod'] = intval($_REQUEST['price_prod']);
        $data['price_prod'] = intval($_REQUEST['price_prod']);
    }

    // below statement make sure every add to cart action as unique line item
    $cart_item_data['custom_data']['unique_key'] = md5( microtime().rand() );
    WC()->session->set( 'price_calculation', $data );
    
    return $cart_item_data;
}

add_action( 'woocommerce_before_calculate_totals', 'add_custom_item_price', 10 );
function add_custom_item_price( $cart_object ) {
    
    foreach ( $cart_object->get_cart() as $item_values ) {

        ##  Get cart item data
        $item_id = $item_values['data']->id; // Product ID
        $original_price = $item_values['data']->price; // Product original price
        
        ## Get your custom fields values
        $price1 = $item_values['custom_data']['price_prod'];

        // CALCULATION FOR EACH ITEM:
        ## Make HERE your own calculation 
        $new_price = $price1 ;

        ## Set the new item price in cart
        $item_values['data']->set_price($new_price);
    }
}

// add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'delshipping_calc_in_cart', 1000 );
function woocommerce_custom_price_to_cart_item( $cart_object ) {  
    if( !WC()->session->__isset( "reload_checkout" )) {
        foreach ( $cart_object->cart_contents as $key => $value ) {
            if( isset( $value["price_prod"] ) ) {
                //for woocommerce version lower than 3
                //$value['data']->price = $value["custom_price"];
                //for woocommerce version +3
                $value['data']->set_price($value["price_prod"]);
            }
        }  
   }  
}
add_action( 'woocommerce_before_calculate_totals', 'woocommerce_custom_price_to_cart_item', 1000 );