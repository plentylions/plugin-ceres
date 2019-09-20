<?php

namespace Ceres\Widgets\Presets;

use Ceres\Widgets\Helper\Factories\PresetWidgetFactory;
use Ceres\Widgets\Helper\PresetHelper;
use Plenty\Modules\ShopBuilder\Contracts\ContentPreset;

class DefaultChangeMailPreset implements ContentPreset
{
    public function getWidgets()
    {
        /** @var PresetHelper */
        $preset = pluginApp(PresetHelper::class);

        /** @var PresetWidgetFactory $row */
        $row = $preset
            ->createWidget("Ceres::ThreeColumnWidget")
            ->withSetting("customClass", "")
            ->withSetting("layout", "oneToTwoToOne");

        $row->createChild("second", "Ceres::InlineTextWidget")
            ->withSetting("text", '<h1>{{ trans("Ceres::Template.myAccountChangeEmail") }}</h1><p>{{ trans("Ceres::Template.myAccountChangeEmailInfoText") }}</p>')
            ->withSetting("customClass", "")
            ->withSetting("appearance", "none")
            ->withSetting("spacing.customMargin", true)
            ->withSetting("spacing.margin.left.value", 0)
            ->withSetting("spacing.margin.left.unit", null);

        $row->createChild("second", "Ceres::ChangeMailWidget")
            ->withSetting("customClass", "")
            ->withSetting("appearance", "primary");

        return $preset->toArray();
    }
}
