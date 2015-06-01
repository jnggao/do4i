<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1468ea852965a13c65efaa1bcfea18e2feed23c33f244926738e0a992b0db0bc extends Twig_Template
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
        $__internal_cb528adea29348f7b231c1b92da83e31cafca0b551f10e490ea706cdebb2fe1a = $this->env->getExtension("native_profiler");
        $__internal_cb528adea29348f7b231c1b92da83e31cafca0b551f10e490ea706cdebb2fe1a->enter($__internal_cb528adea29348f7b231c1b92da83e31cafca0b551f10e490ea706cdebb2fe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cb528adea29348f7b231c1b92da83e31cafca0b551f10e490ea706cdebb2fe1a->leave($__internal_cb528adea29348f7b231c1b92da83e31cafca0b551f10e490ea706cdebb2fe1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
