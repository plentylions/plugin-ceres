<?php

namespace Ceres\Widgets\Helper\Factories\Settings;

class DateSettingFactory extends BaseSettingFactory
{
    public function __construct()
    {
        $this->withType('date');
    }

    /**
     * @param boolean $isCalendarTop
     */
    public function withCalendarTop($isCalendarTop)
    {
        $this->withOption('openCalendarTop', $isCalendarTop);
    }

    /**
     * @param string $format
     */
    public function withDisplayDateFormat($format)
    {
        $this->withOption('displayDateFormat', $format);
    }
}