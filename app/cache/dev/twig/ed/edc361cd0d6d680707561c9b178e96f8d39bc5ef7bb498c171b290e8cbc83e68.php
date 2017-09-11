<?php

/* SdzBlogBundle:Default:index.html.twig */
class __TwigTemplate_bd54cdb8aaa95a77ed1dca9e268f5cc935b93dd1e7630b4d00c4b74a685e29c0 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("Hello {{ name }}!
", "SdzBlogBundle:Default:index.html.twig", "/opt/lampp/htdocs/Symfony/src/Sdz/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
