<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b4c1bcd5124561d48fceaacf02e025a291a85dc321a692311302fa94fc149bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bf0d36cbb94f789942a0cbb3e97905241d615144096be886193d6010367a7f7 = $this->env->getExtension("native_profiler");
        $__internal_4bf0d36cbb94f789942a0cbb3e97905241d615144096be886193d6010367a7f7->enter($__internal_4bf0d36cbb94f789942a0cbb3e97905241d615144096be886193d6010367a7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf0d36cbb94f789942a0cbb3e97905241d615144096be886193d6010367a7f7->leave($__internal_4bf0d36cbb94f789942a0cbb3e97905241d615144096be886193d6010367a7f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_953f337b84452e780ce534989ebfb0508acaf8b6ca7257db43037256b8c5941d = $this->env->getExtension("native_profiler");
        $__internal_953f337b84452e780ce534989ebfb0508acaf8b6ca7257db43037256b8c5941d->enter($__internal_953f337b84452e780ce534989ebfb0508acaf8b6ca7257db43037256b8c5941d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_953f337b84452e780ce534989ebfb0508acaf8b6ca7257db43037256b8c5941d->leave($__internal_953f337b84452e780ce534989ebfb0508acaf8b6ca7257db43037256b8c5941d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a1cbf159fbecc9af4c5e5d53c3cb160a4f09d9a6d5e5fce03f366bdafb2e0cb = $this->env->getExtension("native_profiler");
        $__internal_2a1cbf159fbecc9af4c5e5d53c3cb160a4f09d9a6d5e5fce03f366bdafb2e0cb->enter($__internal_2a1cbf159fbecc9af4c5e5d53c3cb160a4f09d9a6d5e5fce03f366bdafb2e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a1cbf159fbecc9af4c5e5d53c3cb160a4f09d9a6d5e5fce03f366bdafb2e0cb->leave($__internal_2a1cbf159fbecc9af4c5e5d53c3cb160a4f09d9a6d5e5fce03f366bdafb2e0cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcabb2e6c3eca6e2ec0f13d4e1b0a12d2bf90cbbffe6726774b0f19fdf430335 = $this->env->getExtension("native_profiler");
        $__internal_dcabb2e6c3eca6e2ec0f13d4e1b0a12d2bf90cbbffe6726774b0f19fdf430335->enter($__internal_dcabb2e6c3eca6e2ec0f13d4e1b0a12d2bf90cbbffe6726774b0f19fdf430335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dcabb2e6c3eca6e2ec0f13d4e1b0a12d2bf90cbbffe6726774b0f19fdf430335->leave($__internal_dcabb2e6c3eca6e2ec0f13d4e1b0a12d2bf90cbbffe6726774b0f19fdf430335_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
