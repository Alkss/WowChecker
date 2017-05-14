<?php

/* 1.0/resources/css/axure_rp_page.css */
class __TwigTemplate_f1b1bc13fcefac69fb93a6a43b4ad9cb68fe6e3cac6fbb32a667529f3a7f39d3 extends Twig_Template
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
        echo "﻿/* so the window resize fires within a frame in IE7 */
html, body {
    height: 100%;
}

a {
    color: inherit;
}

p {
    margin: 0px;
    text-rendering: optimizeLegibility;
    font-feature-settings: \"kern\" 1;
    -webkit-font-feature-settings: \"kern\";
    -moz-font-feature-settings: \"kern\";
    -moz-font-feature-settings: \"kern=1\";
    font-kerning: normal;
}

iframe {
    background: #FFFFFF;
}

/* to match IE with C, FF */
input {
    padding: 1px 0px 1px 0px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

textarea {
    margin: 0px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

div.intcases {
    font-family: arial; 
    font-size: 12px;
    text-align:left; 
    border:1px solid #AAA; 
    background:#FFF none repeat scroll 0% 0%; 
    z-index:9999; 
    visibility:hidden; 
    position:absolute;
    padding: 0px;
    border-radius: 3px;
    white-space: nowrap;
}

div.intcaselink {
    cursor: pointer;
    padding: 3px 8px 3px 8px;
    margin: 5px;
    background:#EEE none repeat scroll 0% 0%; 
    border:1px solid #AAA;
    border-radius: 3px;
}

div.refpageimage {
    position: absolute;
    left: 0px;
    top: 0px;
    font-size: 0px;
    width: 16px;
    height: 16px;
    cursor: pointer;
    background-image: url(images/newwindow.gif);
    background-repeat: no-repeat;
}

div.annnoteimage {
    position: absolute;
    left: 0px;
    top: 0px;
    font-size: 0px;
    /*width: 16px;
    height: 12px;*/
    cursor: help;
    /*background-image: url(images/note.gif);*/
    /*background-repeat: no-repeat;*/
    width: 13px;
    height: 12px;
    padding-top: 1px;
    text-align: center;
    background-color: #138CDD;
    -moz-box-shadow: 1px 1px 3px #aaa;
    -webkit-box-shadow: 1px 1px 3px #aaa;
    box-shadow: 1px 1px 3px #aaa;
}

div.annnoteline {
    display: inline-block;
    width: 9px;
    height: 1px;
    border-bottom: 1px solid white;
    margin-top: 1px;
}

div.annnotelabel {
    position: absolute;
    left: 0px;
    top: 0px;
    font-family: Helvetica,Arial;
    font-size: 10px;
    /*border: 1px solid rgb(166,221,242);*/
    cursor: help;
    /*background:rgb(0,157,217) none repeat scroll 0% 0%;*/ 
    padding: 1px 3px 1px 3px;
    white-space: nowrap;
    color: white;
    
    background-color: #138CDD;
    -moz-box-shadow: 1px 1px 3px #aaa;
    -webkit-box-shadow: 1px 1px 3px #aaa;
    box-shadow: 1px 1px 3px #aaa;
}

.annotation {
    font-size: 12px;
    padding-left: 2px;
    margin-bottom: 5px;
}

.annotationName {
    /*font-size: 13px;
    font-weight: bold;
    margin-bottom: 3px;
    white-space: nowrap;*/

    font-family: 'Trebuchet MS';
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
    white-space: nowrap;
}

.annotationValue {
    font-family: Arial, Helvetica, Sans-Serif;
    font-size: 12px;
    color: #4a4a4a;
    line-height: 21px;
    margin-bottom: 20px;
}

.noteLink {
    text-decoration: inherit;
    color: inherit;
}

.noteLink:hover {
    background-color: white;
}

/* this is a fix for the issue where dialogs jump around and takes the text-align from the body */
.dialogFix {
    position:absolute;
    text-align:left;
    border: 1px solid #8f949a;
}


@keyframes pulsate {
  from {
    box-shadow: 0 0 10px #15d6ba;
  }
  to {
    box-shadow: 0 0 20px #15d6ba;
  }
}

@-webkit-keyframes pulsate {
  from {
    -webkit-box-shadow: 0 0 10px #15d6ba;
    box-shadow: 0 0 10px #15d6ba;
  }
  to {
    -webkit-box-shadow: 0 0 20px #15d6ba;
    box-shadow: 0 0 20px #15d6ba;
  }
}
 
@-moz-keyframes pulsate {
  from {
    -moz-box-shadow: 0 0 10px #15d6ba;
    box-shadow: 0 0 10px #15d6ba;
  }
  to {
    -moz-box-shadow: 0 0 20px #15d6ba;
    box-shadow: 0 0 20px #15d6ba;
  }
}

.legacyPulsateBorder {
    /*border: 5px solid #15d6ba;
    margin: -5px;*/
    -moz-box-shadow: 0 0 10px 3px #15d6ba;
    box-shadow: 0 0 10px 3px #15d6ba;
}

.pulsateBorder {
  animation-name: pulsate;
  animation-timing-function: ease-in-out;
  animation-duration: 0.9s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  
  -webkit-animation-name: pulsate;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-duration: 0.9s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;

  -moz-animation-name: pulsate;
  -moz-animation-timing-function: ease-in-out;
  -moz-animation-duration: 0.9s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-direction: alternate;
}

.ax_default_hidden, .ax_default_unplaced{
    display: none;
    visibility: hidden;
}

.widgetNoteSelected {
    -moz-box-shadow: 0 0 10px 3px #138CDD;
    box-shadow: 0 0 10px 3px #138CDD;
    /*-moz-box-shadow: 0 0 20px #3915d6;
    box-shadow: 0 0 20px #3915d6;*/
    /*border: 3px solid #3915d6;*/
    /*margin: -3px;*/
}


.singleImg {
    display: none;
    visibility: hidden;
}";
    }

    public function getTemplateName()
    {
        return "1.0/resources/css/axure_rp_page.css";
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
        return new Twig_Source("", "1.0/resources/css/axure_rp_page.css", "/home/alex/repository/WowChecker/app/Resources/views/1.0/resources/css/axure_rp_page.css");
    }
}
