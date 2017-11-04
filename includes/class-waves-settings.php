<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Settings class
 */
if (!class_exists('WavesSettings')) {

    class WavesSettings
    {

        public static function fields()
        {

            return apply_filters('wc_waves_settings',

                array(
                    'enabled'     => array(
                        'title'   => __('Enable/Disable', 'waves-gateway-for-woocommerce'),
                        'type'    => 'checkbox',
                        'label'   => __('Enable Waves payments', 'waves-gateway-for-woocommerce'),
                        'default' => 'yes',
                    ),
                    'title'       => array(
                        'title'       => __('Title', 'waves-gateway-for-woocommerce'),
                        'type'        => 'text',
                        'description' => __('This controls the title which the user sees during checkout.', 'waves-gateway-for-woocommerce'),
                        'default'     => __('Pay with WAVES', 'waves-gateway-for-woocommerce'),
                        'desc_tip'    => true,
                    ),
                    'description' => array(
                        'title'   => __('Customer Message', 'waves-gateway-for-woocommerce'),
                        'type'    => 'textarea',
                        'default' => __('Ultra-fast and secure checkout with WAVES'),
                    ),
                    'address'     => array(
                        'title'       => __('Destination address', 'waves-gateway-for-woocommerce'),
                        'type'        => 'text',
                        'default'     => '',
                        'description' => __('This addresses will be used for receiving funds.', 'waves-gateway-for-woocommerce'),
                    ),
                    'show_prices' => array(
                        'title'   => __('Convert prices', 'waves-gateway-for-woocommerce'),
                        'type'    => 'checkbox',
                        'label'   => __('Add prices in WAVES', 'waves-gateway-for-woocommerce'),
                        'default' => 'no',

                    ),
                    'secret'      => array(
                        'type'    => 'hidden',
                        'default' => sha1(get_bloginfo() . Date('U')),

                    ),
                    'asset_id'     => array(
                        'title'       => __('Asset ID', 'waves-gateway-for-woocommerce'),
                        'type'        => 'text',
                        'default'     => 'AxAmJaro7BJ4KasYiZhw7HkjwgYtt2nekPuF2CN9LMym',
                        'description' => __('This is the asset Id used for transactions.', 'waves-gateway-for-woocommerce'),
                    ),
                    'asset_code'     => array(
                        'title'       => __('Asset code (short name = currency code = currency symbol)', 'waves-gateway-for-woocommerce'),
                        'type'        => 'text',
                        'default'     => 'WNET',
                        'description' => __('This is the Asset Currency code for exchange rates.', 'waves-gateway-for-woocommerce'),
                    ),
                    'asset_desciption'     => array(
                        'title'       => __('Asset description', 'waves-gateway-for-woocommerce'),
                        'type'        => 'text',
                        'default'     => 'Wavesnode.NET',
                        'description' => __('Asset full name', 'waves-gateway-for-woocommerce'),
                    ),
                )
            );
        }
    }

}
