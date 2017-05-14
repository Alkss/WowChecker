<?php

/* 1.0/resources/css/default.css */
class __TwigTemplate_d92566c4a167a4df2d71861db572999a63fd7cb65336299d881eab3ee30e6bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿body {
  font-family : Arial, Helvetica, Sans-Serif;
  background-color: #8f949a;
  overflow:hidden;
}
a {
  cursor: pointer;
}

input[type=\"radio\"], input[type=\"checkbox\"] {
    margin: 0px 9px 0px 0px;
    vertical-align: bottom;
}

input {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#maximizePanelContainer {
  font-size: 4px;
  position:absolute;
  left: 0px;
  top: 0px;
  width: 55px;
  height: 20px;
  overflow: visible;
  z-index: 1000;
}
#maximizePanelOver {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 55px;
    height: 20px;
}
.maximizePanel {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 55px;
    height: 20px;
    background: #a2a2a2 url('../images/expand.png') no-repeat center center;
    background: url('../images/expand.svg') no-repeat center center, linear-gradient(rgba(200,200,200,.5),rgba(200,200,200,.5));
    cursor: pointer;
}

#interfaceControlFrameMinimizeContainer {
  position:absolute;
    top: 0px;
    left: 0px;
  font-size: 2px; /*for IE*/
  text-align: right;
  z-index: 100;
    height: 20px;
    width: 55px;
    background-color: #62666b;
}
#interfaceControlFrameMinimizeContainer a {
    display: inline-block;
    width: 55px;
    height: 20px;
    font-size: 2px;
    background: url('../images/close.png') no-repeat center center;
    background: url('../images/close.svg') no-repeat center center, linear-gradient(transparent,transparent);
    text-decoration: none;
}

.hashover #interfaceControlFrameMinimizeContainer a:hover {
    background: url('../images/close_hover.png') no-repeat center center;
    background: url('../images/close_hover.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

#interfaceControlFrame {
    margin: 0px 0px 0px 55px;
}

#interfaceControlFrameCloseContainer {
    /*display: none;*/
    position:absolute;
    bottom: 0px;
    left: 0px;
    font-size: 9px;
    font-family: 'Trebuchet MS';
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 100;
    width: 55px;
    background-color: #62666b;
    text-align: center;  
}
#interfaceControlFrameCloseContainer a {
    display: inline-block;
    width: 55px;
    color: #ffffff;
    padding: 5px 0px;
}

#interfaceControlFrameHeader li a {
    display: block;
    width: 54px;
    height: 78px;
    text-align: center;
    padding-top: 50px;
    outline: none;
    margin-right: 1px;
    text-decoration: none;
    color: #ffffff;
    white-space: nowrap;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: 50% 17px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
}

.hashover #interfaceControlFrameHeader li a:hover {
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: 50% 17px;
    color: #c2c2c2;
}

#interfaceControlFrameHeader li a.selected, #interfaceControlFrameHeader li a.selected:hover {
    background-color: #f5f5f5;
    background-repeat: no-repeat;
    background-position: 50% 17px;
    color: #62666b;
    border-left: 5px solid #138CDD;
}

#interfaceControlFrameHeaderContainer {
    float: left;
    overflow: visible;
    width: 55px;
    margin-left: -55px;
    margin-top: 20px;
}

#interfaceControlFrameHeader {
    position: relative;
    list-style: none;
    font-size: 8px;
    z-index: 50;
    font-family: 'Trebuchet MS';
    font-weight: bold;
    letter-spacing: 1px;
}

#interfaceControlFrameContainer {
    float: right;
    background-color: #f5f5f5;
    overflow: hidden;
    width: 100%;
}

#interfaceControlFrameLogoContainer {
  background-color: White;
  padding: 20px 10px 10px 10px;
  overflow: hidden;
}

#interfaceControlFrameLogoImageContainer {
  text-align: center;
}

#interfaceControlFrameLogoCaptionContainer {
  text-align: center;
  margin: 5px 10px 0px 10px;
  font-size: 12px;
  color: #4a4a4a;
}

#logoImage {
    width: 100%;
}

.emptyStateContainer {
    text-align: center;
    padding: 0px 10px;
    margin-top: 32px
}

.emptyStateTitle {
    margin: 0px 0px 9px 0px;
    font-weight: bold;
}

.emptyStateContent {
    line-height: 16px;
}

.dottedDivider {
    height: 2px;
    margin: 15px 0px 15px 0px;
    background: url('../images/divider.png') no-repeat center center;
    background: url('../images/divider.svg') no-repeat center center, linear-gradient(transparent,transparent);
}

.nondottedDivider {
    height: 2px;
    margin: 9px 0px 9px 0px;
}";
    }

    public function getTemplateName()
    {
        return "1.0/resources/css/default.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "1.0/resources/css/default.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/css/default.css");
    }
}
