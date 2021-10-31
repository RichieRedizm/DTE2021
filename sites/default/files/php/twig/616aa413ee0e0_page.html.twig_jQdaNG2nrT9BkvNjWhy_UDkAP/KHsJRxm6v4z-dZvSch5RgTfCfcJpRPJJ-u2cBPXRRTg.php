<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/freelancer_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_7b3d889ccb6c1feefe271136bc0b8bfb1a05a16810f03c06525eb23e7233d365 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!-- Start: Top Bar -->
<div class=\"top-nav\">

  ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 64)) {
            // line 65
            echo "    <div class=\"top-email\">
      <i class=\"fa fa-envelope\"></i>
      ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 67), 67, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 70
        echo "  
  ";
        // line 71
        if (($context["show_social_icon"] ?? null)) {
            // line 72
            echo "    <div class=\"top-social-media social-media\">
      Follow us 
      ";
            // line 74
            if (($context["facebook_url"] ?? null)) {
                // line 75
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 75, $this->source), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
      ";
            }
            // line 77
            echo "      ";
            if (($context["twitter_url"] ?? null)) {
                // line 78
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 78, $this->source), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
      ";
            }
            // line 80
            echo "      ";
            if (($context["linkedin_url"] ?? null)) {
                // line 81
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 81, $this->source), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
      ";
            }
            // line 83
            echo "      ";
            if (($context["instagram_url"] ?? null)) {
                // line 84
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 84, $this->source), "html", null, true));
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
      ";
            }
            // line 86
            echo "      ";
            if (($context["rss_url"] ?? null)) {
                // line 87
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 87, $this->source), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
      ";
            }
            // line 89
            echo "    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 92)) {
            // line 93
            echo "    <div class=\"top-menu\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 94), 94, $this->source), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 97
        echo "
</div>
<!-- End: Region -->


<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container-\">

      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 110)) {
            // line 111
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true));
            echo "
        ";
        }
        // line 113
        echo "      </div>

      ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 115) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 115))) {
            // line 116
            echo "        <div class=\"navbar-header-primary-menu\">
          ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 117)) {
                // line 118
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 118), 118, $this->source), "html", null, true));
                echo "
          ";
            }
            // line 120
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 120)) {
                // line 121
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 121), 121, $this->source), "html", null, true));
                echo "
          ";
            }
            // line 123
            echo "        </div>
      ";
        }
        // line 125
        echo "
  </div>
</div>
<!-- End: Region -->


<!-- Start: Slides -->
";
        // line 132
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 133
            echo "  <div class=\"container-\">
  ";
            // line 134
            $context["responsiveimagestyle"] = ["#theme" => "responsive_image", "#responsive_image_style_id" => "homepage", "#uri" => "public://homepage-petra.jpg", "#alt" => "Petra", "#attributes" => ["class" => "img-responsive"]];
            // line 141
            echo "    <div class=\"flexslider\">
      <div class='image-overlay'>
        &nbsp;
      </div>
      ";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsiveimagestyle"] ?? null), 145, $this->source), "html", null, true));
            echo "
      <div class=\"slider-caption\">
        <h2 class=\"slider-title\">Down To Earth Travel</h2>
        <div class=\"clearfix\"><p class=\"slider-description\">We are two female tour leaders who started our careers in the Middle East and consequently had our eyes opened by this troubled and misrepresented but fascinating region, its culture, way of life, the food and the feeling of coming home.
We would love to share this with you.</p></div>
        <a href=\"/about-us/downtoearthtravel\" class=\"more-link\">Read more</a>
      </div>
 
    </div>
  </div>
";
        }
        // line 156
        echo "<!-- End: Region -->


<!--Start: Top Message -->
";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 160)) {
            // line 161
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 163), 163, $this->source), "html", null, true));
            echo "
    </div>
  </div>
";
        }
        // line 167
        echo "<!-- End: Region -->


<!-- Start: Top widget -->
";
        // line 171
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 171) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 171)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 171))) {
            // line 172
            echo "  
  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">
      ";
            // line 176
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 176)) {
                // line 177
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 178), 178, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 181
            echo "
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 183)) {
                // line 184
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 184, $this->source), "html", null, true));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 184), 184, $this->source), "html", null, true));
                echo "</div>
          ";
            }
            // line 186
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 186)) {
                // line 187
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 187, $this->source), "html", null, true));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 187), 187, $this->source), "html", null, true));
                echo "</div>
          ";
            }
            // line 189
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 189)) {
                // line 190
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 190, $this->source), "html", null, true));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 190), 190, $this->source), "html", null, true));
                echo "</div>
          ";
            }
            // line 192
            echo "        </div>
    </div>
  </div>

";
        }
        // line 197
        echo "<!-- End: Region -->

    
<!--Start: Highlighted -->
";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 201)) {
            // line 202
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 204), 204, $this->source), "html", null, true));
            echo "
    </div>
  </div>
";
        }
        // line 208
        echo "<!--End: Highlighted -->


<!--Start: Title -->
";
        // line 212
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 212) &&  !($context["is_front"] ?? null))) {
            // line 213
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 216), 216, $this->source), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 221
        echo "<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 228
        if ( !($context["is_front"] ?? null)) {
            // line 229
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 230
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 230), 230, $this->source), "html", null, true));
            echo "</div>
        </div>
      ";
        }
        // line 233
        echo "
      <div class=\"row layout\">

        ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 236)) {
            // line 237
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 237, $this->source), "html", null, true));
            echo ">
            <div class=\"sidebar\">
              ";
            // line 239
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 239), 239, $this->source), "html", null, true));
            echo "
            </div>
          </div>
        ";
        }
        // line 243
        echo "
        ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 244)) {
            // line 245
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 245, $this->source), "html", null, true));
            echo ">
            <div class=\"content_layout\">
              ";
            // line 247
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 247), 247, $this->source), "html", null, true));
            echo "
            </div>              
          </div>
        ";
        }
        // line 251
        echo "        
        ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 252)) {
            // line 253
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 253, $this->source), "html", null, true));
            echo ">
            <div class=\"sidebar\">
              ";
            // line 255
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 255), 255, $this->source), "html", null, true));
            echo "
            </div>
          </div>
        ";
        }
        // line 259
        echo "        
      </div>
    
    </div>
  </div>
</div>
<!-- End: Region -->


<!-- Start: Features -->
";
        // line 269
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 269) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 269)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 269))) {
            // line 270
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 274
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 274)) {
                // line 275
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 276), 276, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 279
            echo "
      <div class=\"row features-list\">
        ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 281)) {
                // line 282
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 282, $this->source), "html", null, true));
                echo ">
            ";
                // line 283
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 283), 283, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 286
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 286)) {
                // line 287
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 287, $this->source), "html", null, true));
                echo ">
            ";
                // line 288
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 288), 288, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 291
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 291)) {
                // line 292
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 292, $this->source), "html", null, true));
                echo ">
            ";
                // line 293
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 293), 293, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 296
            echo "      </div>
    </div>
  </div>
";
        }
        // line 300
        echo "<!-- End: Region -->


<!-- Start: Updates widgets -->
";
        // line 304
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 304) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 304)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 304))) {
            // line 305
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 309)) {
                // line 310
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 311), 311, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 314
            echo "
      <div class=\"row updates-list\">
        ";
            // line 316
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 316)) {
                // line 317
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 317, $this->source), "html", null, true));
                echo ">
            ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 318), 318, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 321
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 321)) {
                // line 322
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 322, $this->source), "html", null, true));
                echo ">
            ";
                // line 323
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 323), 323, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 325
            echo "       
        ";
            // line 326
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 326)) {
                // line 327
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 327, $this->source), "html", null, true));
                echo ">
            ";
                // line 328
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 328), 328, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 330
            echo "       
        ";
            // line 331
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 331)) {
                // line 332
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 332, $this->source), "html", null, true));
                echo ">
            ";
                // line 333
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 333), 333, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 336
            echo "      </div>
    </div>
  </div>
";
        }
        // line 340
        echo "<!-- End: Region -->


<!-- Start: Middle widgets -->
";
        // line 344
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 344) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 344)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 344)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 344))) {
            // line 345
            echo "
  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 349
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 349)) {
                // line 350
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 351
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 351), 351, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 354
            echo "
      <div class=\"row midwidget-list\">
        ";
            // line 356
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 356)) {
                // line 357
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 357, $this->source), "html", null, true));
                echo ">
            ";
                // line 358
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 358), 358, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 361
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 361)) {
                // line 362
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 362, $this->source), "html", null, true));
                echo ">
            ";
                // line 363
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 363), 363, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 366
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 366)) {
                // line 367
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 367, $this->source), "html", null, true));
                echo ">
            ";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 368), 368, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 371
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 371)) {
                // line 372
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 372, $this->source), "html", null, true));
                echo ">
            ";
                // line 373
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 373), 373, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 376
            echo "      </div>
    </div>
  </div>
";
        }
        // line 380
        echo "<!-- End: Region -->


<!-- Start: Clients -->
";
        // line 384
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 384)) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    <div class=\"container\">
      ";
            // line 387
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 387)) {
                // line 388
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 389
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 389), 389, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 392
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 392), 392, $this->source), "html", null, true));
            echo "
    </div>
  </div>
";
        }
        // line 396
        echo "<!-- End: Region -->


<!-- Start: Bottom widgets -->
";
        // line 400
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 400) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 400)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 400)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 400))) {
            // line 401
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 405
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 405)) {
                // line 406
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 407
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 407), 407, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 410
            echo "
      <div class=\"row bottom-widget-list\">
        ";
            // line 412
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 412)) {
                // line 413
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 413, $this->source), "html", null, true));
                echo ">
            ";
                // line 414
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 414), 414, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 417
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 417)) {
                // line 418
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 418, $this->source), "html", null, true));
                echo ">
            ";
                // line 419
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 419), 419, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 421
            echo "      
        ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 422)) {
                // line 423
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 423, $this->source), "html", null, true));
                echo ">
            ";
                // line 424
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 424), 424, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 427
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 427)) {
                // line 428
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 428, $this->source), "html", null, true));
                echo ">
            ";
                // line 429
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 429), 429, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 432
            echo "      </div>
    </div>
  </div>
";
        }
        // line 436
        echo "<!-- End: Region -->


<!-- Start: Footer widgets -->
";
        // line 440
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 440) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 440)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 440))) {
            // line 441
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 445
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 445)) {
                // line 446
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 447
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 447), 447, $this->source), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 450
            echo "
      <div class=\"row\">
        ";
            // line 452
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 452)) {
                // line 453
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 453, $this->source), "html", null, true));
                echo ">
            ";
                // line 454
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 454), 454, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 457
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 457)) {
                // line 458
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 458, $this->source), "html", null, true));
                echo ">
            ";
                // line 459
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 459), 459, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 462
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 462)) {
                // line 463
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 463, $this->source), "html", null, true));
                echo ">
            ";
                // line 464
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 464), 464, $this->source), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 467
            echo "      </div>
    </div>
  </div>
";
        }
        // line 471
        echo "<!-- End: Region -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <a href=\"https://www.protectedtrustservices.com/services/consumer-protection/\" target='_blank' title=\"Protected Trust Services\"><img alt=\"Protected Trust Services\" data-align=\"center\" data-entity-type=\"file\" data-entity-uuid=\"168bf260-e90e-4dde-a4d7-b107b0434448\" src=\"/sites/default/files/inline-images/protected-trust-services.png\" width=\"150\" /></a>
    <div class='fotter-contact'>Down To Earth Travel - Contact UK: +44 7748 118086 / +44 0786 7965268</div>
    <span>Copyright © ";
        // line 479
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</span>
    ";
        // line 480
        if (($context["show_credit_link"] ?? null)) {
            // line 481
            echo "      <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 483
        echo "  </div>
</div>
<!-- End: Region -->





";
    }

    public function getTemplateName()
    {
        return "themes/freelancer_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  905 => 483,  901 => 481,  899 => 480,  895 => 479,  885 => 471,  879 => 467,  873 => 464,  868 => 463,  865 => 462,  859 => 459,  854 => 458,  851 => 457,  845 => 454,  840 => 453,  838 => 452,  834 => 450,  828 => 447,  825 => 446,  823 => 445,  817 => 441,  815 => 440,  809 => 436,  803 => 432,  797 => 429,  792 => 428,  789 => 427,  783 => 424,  778 => 423,  776 => 422,  773 => 421,  767 => 419,  762 => 418,  759 => 417,  753 => 414,  748 => 413,  746 => 412,  742 => 410,  736 => 407,  733 => 406,  731 => 405,  725 => 401,  723 => 400,  717 => 396,  709 => 392,  703 => 389,  700 => 388,  698 => 387,  692 => 384,  686 => 380,  680 => 376,  674 => 373,  669 => 372,  666 => 371,  660 => 368,  655 => 367,  652 => 366,  646 => 363,  641 => 362,  638 => 361,  632 => 358,  627 => 357,  625 => 356,  621 => 354,  615 => 351,  612 => 350,  610 => 349,  604 => 345,  602 => 344,  596 => 340,  590 => 336,  584 => 333,  579 => 332,  577 => 331,  574 => 330,  568 => 328,  563 => 327,  561 => 326,  558 => 325,  552 => 323,  547 => 322,  544 => 321,  538 => 318,  533 => 317,  531 => 316,  527 => 314,  521 => 311,  518 => 310,  516 => 309,  510 => 305,  508 => 304,  502 => 300,  496 => 296,  490 => 293,  485 => 292,  482 => 291,  476 => 288,  471 => 287,  468 => 286,  462 => 283,  457 => 282,  455 => 281,  451 => 279,  445 => 276,  442 => 275,  440 => 274,  434 => 270,  432 => 269,  420 => 259,  413 => 255,  407 => 253,  405 => 252,  402 => 251,  395 => 247,  389 => 245,  387 => 244,  384 => 243,  377 => 239,  371 => 237,  369 => 236,  364 => 233,  358 => 230,  355 => 229,  353 => 228,  344 => 221,  336 => 216,  331 => 213,  329 => 212,  323 => 208,  316 => 204,  312 => 202,  310 => 201,  304 => 197,  297 => 192,  289 => 190,  286 => 189,  278 => 187,  275 => 186,  267 => 184,  265 => 183,  261 => 181,  255 => 178,  252 => 177,  250 => 176,  244 => 172,  242 => 171,  236 => 167,  229 => 163,  225 => 161,  223 => 160,  217 => 156,  203 => 145,  197 => 141,  195 => 134,  192 => 133,  190 => 132,  181 => 125,  177 => 123,  171 => 121,  168 => 120,  162 => 118,  160 => 117,  157 => 116,  155 => 115,  151 => 113,  145 => 111,  143 => 110,  128 => 97,  122 => 94,  119 => 93,  117 => 92,  114 => 91,  110 => 89,  104 => 87,  101 => 86,  95 => 84,  92 => 83,  86 => 81,  83 => 80,  77 => 78,  74 => 77,  68 => 75,  66 => 74,  62 => 72,  60 => 71,  57 => 70,  51 => 67,  47 => 65,  45 => 64,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/freelancer_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/docroot/themes/freelancer_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 64, "set" => 134);
        static $filters = array("escape" => 67, "date" => 479);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
