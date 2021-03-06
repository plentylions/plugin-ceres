<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;

/**
 * Class ContainerSettingFactory
 *
 * This class extends the GenericSettingsFactory by adding child settings.
 *
 * @package Ceres\Widgets\Helper\Factories\Settings
 */
class ContainerSettingFactory extends BaseSettingFactory
{
    /**
     * @var WidgetSettingsFactory $children
     *
     * Nested settings which are grouped inside a container.
     */
    public $children;

    /**
     * Create a new factory instance with initial value.
     *
     * @param array $data
     * @return ContainerSettingFactory
     */
    public static function create($data = [])
    {
        /** @var ContainerSettingFactory $instance */
        $instance = pluginApp(ContainerSettingFactory::class);
        $instance->children = WidgetSettingsFactory::create($data['children']);
        unset($data['children']);
        $instance->data = $data;
        return $instance;
    }

    public function __construct()
    {
        $this->children = pluginApp(WidgetSettingsFactory::class);
    }

    /**
     * Get all children as a native array
     *
     * @return array
     */
    public function toArray()
    {
        $data = parent::toArray();
        $data['children'] = $this->children->toArray();
        return $data;
    }
}