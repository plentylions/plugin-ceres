<?php

namespace Ceres\Widgets;

use Ceres\Widgets\Basket\BasketTotalsWidget;
use Ceres\Widgets\Basket\BasketWidget;
use Ceres\Widgets\Basket\CouponWidget;
use Ceres\Widgets\Basket\ShippingCountryWidget;
use Ceres\Widgets\Checkout\CancelPaymentWidget;
use Ceres\Widgets\Checkout\ContactWishWidget;
use Ceres\Widgets\Checkout\GtcCheckWidget;
use Ceres\Widgets\Checkout\PaymentProviderWidget;
use Ceres\Widgets\Checkout\PlaceOrderWidget;
use Ceres\Widgets\Checkout\ShippingPrivacyCheckWidget;
use Ceres\Widgets\Checkout\ShippingProfileWidget;
use Ceres\Widgets\Checkout\SubscribeNewsletterCheckWidget;
use Ceres\Widgets\Common\CodeWidget;
use Ceres\Widgets\Common\CollapseWidget;
use Ceres\Widgets\Common\GoogleMapsWidget;
use Ceres\Widgets\Common\ImageBoxWidget;
use Ceres\Widgets\Common\ImageCarouselWidget;
use Ceres\Widgets\Common\InlineTextWidget;
use Ceres\Widgets\Common\ItemListWidget;
use Ceres\Widgets\Common\LinkListWidget;
use Ceres\Widgets\Common\LinkWidget;
use Ceres\Widgets\Common\ListWidget;
use Ceres\Widgets\Common\LiveShoppingWidget;
use Ceres\Widgets\Common\NewsletterUnsubscribeWidget;
use Ceres\Widgets\Common\NewsletterWidget;
use Ceres\Widgets\Common\PrintButtonWidget;
use Ceres\Widgets\Common\PrivacySettingsWidget;
use Ceres\Widgets\Common\SeparatorWidget;
use Ceres\Widgets\Common\TextWidget;
use Ceres\Widgets\Common\TitleBarWidget;
use Ceres\Widgets\Contact\ContactDetailsWidget;
use Ceres\Widgets\Customer\AddressWidget;
use Ceres\Widgets\Customer\ChangeMailWidget;
use Ceres\Widgets\Customer\ChangePasswordWidget;
use Ceres\Widgets\Footer\CookieBarWidget;
use Ceres\Widgets\Footer\LegalInformationWidget;
use Ceres\Widgets\Form\AcceptPrivacyPolicyWidget;
use Ceres\Widgets\Form\MailFormWidget;
use Ceres\Widgets\Form\MailInputWidget;
use Ceres\Widgets\Form\SelectionWidget;
use Ceres\Widgets\Form\TextAreaWidget;
use Ceres\Widgets\Form\TextInputWidget;
use Ceres\Widgets\Grid\AdditionalInformationWidget;
use Ceres\Widgets\Grid\FourColumnWidget;
use Ceres\Widgets\Grid\StickyContainerWidget;
use Ceres\Widgets\Grid\TabWidget;
use Ceres\Widgets\Grid\ThreeColumnWidget;
use Ceres\Widgets\Grid\TwoColumnWidget;
use Ceres\Widgets\Header\BreadcrumbWidget;
use Ceres\Widgets\Header\NavigationWidget;
use Ceres\Widgets\Header\TopBarWidget;
use Ceres\Widgets\Item\AddToBasketWidget;
use Ceres\Widgets\Item\AddToWishListWidget;
use Ceres\Widgets\Item\AttributeWidget;
use Ceres\Widgets\Item\GraduatedPriceWidget;
use Ceres\Widgets\Item\ItemAvailabilityWidget;
use Ceres\Widgets\Item\ItemBundleWidget;
use Ceres\Widgets\Item\ItemDataTableWidget;
use Ceres\Widgets\Item\ItemImageWidget;
use Ceres\Widgets\Item\ItemPriceWidget;
use Ceres\Widgets\Item\OrderPropertyWidget;
use Ceres\Widgets\Item\WishListWidget;
use Ceres\Widgets\Legal\LegalTextsWidget;
use Ceres\Widgets\Login\GuestLoginWidget;
use Ceres\Widgets\Login\LoginWidget;
use Ceres\Widgets\Login\RegistrationWidget;
use Ceres\Widgets\MyAccount\AccountSettingsWidget;
use Ceres\Widgets\MyAccount\BankDataSelectWidget;
use Ceres\Widgets\MyAccount\GreetingWidget;
use Ceres\Widgets\MyAccount\LogoutButtonWidget;
use Ceres\Widgets\MyAccount\OrderHistoryWidget;
use Ceres\Widgets\MyAccount\OrderReturnHistoryWidget;
use Ceres\Widgets\OrderConfirmation\OrderDataWidget;
use Ceres\Widgets\OrderConfirmation\OrderDocumentsWidget;
use Ceres\Widgets\OrderConfirmation\OrderReturnWidget;
use Ceres\Widgets\OrderConfirmation\OrderTotalsWidget;
use Ceres\Widgets\OrderConfirmation\PurchasedItemsWidget;

class WidgetCollection
{
    const BASKET_WIDGETS = [
        BasketTotalsWidget::class,
        BasketWidget::class,
        CouponWidget::class,
        ShippingCountryWidget::class
    ];

    const CHECKOUT_WIDGETS = [
        CancelPaymentWidget::class,
        ContactWishWidget::class,
        GtcCheckWidget::class,
        PaymentProviderWidget::class,
        PlaceOrderWidget::class,
        ShippingPrivacyCheckWidget::class,
        ShippingProfileWidget::class,
        SubscribeNewsletterCheckWidget::class
    ];

    const COMMON_WIDGETS = [
        CodeWidget::class,
        CollapseWidget::class,
        GoogleMapsWidget::class,
        ImageBoxWidget::class,
        ImageCarouselWidget::class,
        InlineTextWidget::class,
        ItemListWidget::class,
        LinkListWidget::class,
        LinkWidget::class,
        ListWidget::class,
        LiveShoppingWidget::class,
        NewsletterUnsubscribeWidget::class,
        NewsletterWidget::class,
        PrintButtonWidget::class,
        PrivacySettingsWidget::class,
        SeparatorWidget::class,
        TextWidget::class,
        TitleBarWidget::class
    ];

    const CONTACT_WIDGETS = [
        ContactDetailsWidget::class
    ];

    const CUSTOMER_WIDGETS = [
        AddressWidget::class,
        ChangeMailWidget::class,
        ChangePasswordWidget::class
    ];

    const FOOTER_WIDGETS = [
        CookieBarWidget::class,
        LegalInformationWidget::class
    ];

    const FORM_WIDGETS = [
        AcceptPrivacyPolicyWidget::class,
        MailFormWidget::class,
        MailInputWidget::class,
        SelectionWidget::class,
        TextAreaWidget::class,
        TextInputWidget::class
    ];

    const GRID_WIDGETS = [
        AdditionalInformationWidget::class,
        FourColumnWidget::class,
        StickyContainerWidget::class,
        TabWidget::class,
        ThreeColumnWidget::class,
        TwoColumnWidget::class
    ];

    const HEADER_WIDGETS = [
        BreadcrumbWidget::class,
        NavigationWidget::class,
        TopBarWidget::class
    ];

    const ITEM_WIDGETS = [
        AddToBasketWidget::class,
        AddToWishListWidget::class,
        AttributeWidget::class,
        GraduatedPriceWidget::class,
        ItemAvailabilityWidget::class,
        ItemBundleWidget::class,
        ItemDataTableWidget::class,
        ItemImageWidget::class,
        ItemPriceWidget::class,
        OrderPropertyWidget::class,
        WishListWidget::class
    ];

    const LEGAL_WIDGETS = [
        LegalTextsWidget::class
    ];

    const LOGIN_WIDGETS = [
        GuestLoginWidget::class,
        LoginWidget::class,
        RegistrationWidget::class
    ];

    const MY_ACCOUNT_WIDGETS = [
        AccountSettingsWidget::class,
        BankDataSelectWidget::class,
        GreetingWidget::class,
        LogoutButtonWidget::class,
        OrderHistoryWidget::class,
        OrderReturnHistoryWidget::class
    ];

    const ORDER_CONFIRMATION_WIDGETS = [
        OrderDataWidget::class,
        OrderDocumentsWidget::class,
        OrderReturnWidget::class,
        OrderTotalsWidget::class,
        PurchasedItemsWidget::class
    ];

    public static function all()
    {
        return array_merge(
            self::BASKET_WIDGETS,
            self::CHECKOUT_WIDGETS,
            self::COMMON_WIDGETS,
            self::CONTACT_WIDGETS,
            self::CUSTOMER_WIDGETS,
            self::FOOTER_WIDGETS,
            self::FORM_WIDGETS,
            self::GRID_WIDGETS,
            self::HEADER_WIDGETS,
            self::ITEM_WIDGETS,
            self::LEGAL_WIDGETS,
            self::LOGIN_WIDGETS,
            self::MY_ACCOUNT_WIDGETS,
            self::ORDER_CONFIRMATION_WIDGETS
        );
    }

}