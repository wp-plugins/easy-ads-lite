<?php

/*
  Copyright (C) 2008 www.ads-ez.com

  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License as
  published by the Free Software Foundation; either version 3 of the
  License, or (at your option) any later version.

  This program is distributed in the hope that they will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
  General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with the programs.  If not, see <http://www.gnu.org/licenses/>.
 */

if (!class_exists('ClicksorWidget')) {

  class ClicksorWidget extends providerWidget {

    public static $provider;

    function ClicksorWidget($name = 'ClicksorWidget') {
      parent::providerWidget($name, self::$provider);
    }

    function widget($args, $instance) {
      extract($args);
      $title = apply_filters('widget_title', $instance['title']);
      echo $before_widget;
      if ($title) {
        echo $before_title . $title . $after_title;
      }
      $adText = stripslashes(self::$provider->get('widget-text'));
      if (empty($adText)) {
        echo sprintf(__("Empty Widget Text from %s", 'easy-ads'), "<code>" . $this->name . "</code>");
      }
      else {
        $adText = ezExtras::handleDefaultText($adText, '160x600');
        echo $this->decorate($adText);
      }
      echo $after_widget;
    }

    public static function setProvider(&$p) {
      self::$provider = & $p;
    }

  }

}  // class ClicksorWidget

if (!class_exists('Clicksor')) {

  class Clicksor extends provider {

  }

}
