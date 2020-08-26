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

/* base.html.twig */
class __TwigTemplate_755a9387ea19c184c464cad074d7f826f9ce8f2fd98058de425e5bf540c7ebe7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADjQAAA40B9chTYAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASQSURBVFiF7ZdbbFRlFIW/faadS0OnNwIFrBHKFIRw67RSUEpRIJIGL6VoC6JgjBoTxQgPkkhMCEoUQ6AvEiHUBCoqxaiAF5SLKUwbKKWoVWw7RalybVGmTG1nzpzfh+n0ZrEzLdEX18tJ1jn/3uv8Wfuc9QsDwOlzOfGG3rYCkWxBmRE5EwiYtmemHWuItJZE8nBNzURzm9X+nBisVUJir9t+hWwl0L4uY9ypplsuoKpuZr4StQEYC6AU1P7YTlurYsJkC9HmzlJ/gNrgMVmL5ow+2jZoAafdMzMN1FsoskOcu9bH7uLr1J31AZCQYOKhglhmz41BtFBJaQTWp6e6totgRCzgRH1miomo14DHQs9duqhTustDZfmfKPX3NaNSoih4Io7JTmt3ulIUq9Md5d+EJeD0uZz4gN72soisBKwA3haDAx/f4OC+G/j9fXTuhYlTLBQujyPljuju9Ncmpb041XG85qYCTrmzlqJkC5AE4PcpDh7wsn9vC63em+5in9A0Yfa8GPIK7NjjtRDtB9noaTS/OmfOUb2HgMr6mS8IagsEDVZxrJXSXR6argQiatwbVpuQmxfLggeGdDOqfJCe6ioUQQlARcP04dGG9gtgufCrzrai32mo8w2qcW8kJplY/mw8UzI6/CEsdKaW79cAzEoeBizKUGxa33zLmwNcaw5Q9EYzVy7pQcKQAgANQCltNEBTk8HVy3pYBbdu3Um5q4b8RYVhi9B1qO0YXUSN6RIgRAEE9P4dPlgEut4vGgg2jhQLF+aRlDgUgEmTp+HXdZRh8Om+vRHXGpCA1avWYjabAZg/L5f583LRdf3fE/DOtiLyFy0hOXkkZWWH+fa7apQR2XdiUAJKSoqZNetekpNHcuKEi9K9uwfUHDpM+F/ifwEDFqD7gwMda48blIABmRDgtwuNOJ138fiypxg/bgIJCUk8/czSiOsEd0AZrQAWa/gRsaRkB83NTVitNrKz72PEiFFhrbN0ZRUvdOyAJvKDUpCQaGLiFAs1Z9r7LXT+/M/kL76fcWl3olDU1p7td018oolJUzv/ht8HL4CrcYbN0k4DkNzervhot4dDn3nDSj/hwpllZcmKeIYOMwEENEMypqW5qjv3vKpuxmwl7AeGAFy9rPPhTg8nXX3nv3AxxmGmcLmdtAmWEKUQXnKmlm+GXpGs8tyM8VqAtxXkhLj6n3y8/25XAg4XQ4eZWLw0jumzbEhXl3rgeefY8i9CRJ+uq3JnzVVKNgGTQlz1yTbeK77O5Yv/nBesVo0FDw4hN68rgoniGpq8GWvEbXY4Pu9hsJva/siRnCh7iu9JQa1TMBwgEICyQ15KS1po8fTMipomZM+NYVFh7xBKsaioV9IdZVf76tPv3FXUTbeb0dYoYSVgg2BM/2RPC4e/9BLQFVMzbTy6zE7yqM7PigL2GIZpTX/nxbAHv9J9z+1iGK8jaklond+n0HWwxfQo40Jpq5yO4xXh1I3ocApQ5b47A2Vs7G7UDriVYo1zbHmpCGHPTcQCQqisy0oXTbIVWEVR7U697atHZE/Eh4i/AL3dqyfOIzDLAAAAAElFTkSuQmCC\">

        <script src=\"https://cdn.jsdelivr.net/npm/vue/dist/vue.js\"></script>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Torre!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 14,  121 => 13,  103 => 10,  84 => 9,  72 => 15,  69 => 14,  67 => 13,  63 => 11,  61 => 10,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADjQAAA40B9chTYAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASQSURBVFiF7ZdbbFRlFIW/faadS0OnNwIFrBHKFIRw67RSUEpRIJIGL6VoC6JgjBoTxQgPkkhMCEoUQ6AvEiHUBCoqxaiAF5SLKUwbKKWoVWw7RalybVGmTG1nzpzfh+n0ZrEzLdEX18tJ1jn/3uv8Wfuc9QsDwOlzOfGG3rYCkWxBmRE5EwiYtmemHWuItJZE8nBNzURzm9X+nBisVUJir9t+hWwl0L4uY9ypplsuoKpuZr4StQEYC6AU1P7YTlurYsJkC9HmzlJ/gNrgMVmL5ow+2jZoAafdMzMN1FsoskOcu9bH7uLr1J31AZCQYOKhglhmz41BtFBJaQTWp6e6totgRCzgRH1miomo14DHQs9duqhTustDZfmfKPX3NaNSoih4Io7JTmt3ulIUq9Md5d+EJeD0uZz4gN72soisBKwA3haDAx/f4OC+G/j9fXTuhYlTLBQujyPljuju9Ncmpb041XG85qYCTrmzlqJkC5AE4PcpDh7wsn9vC63em+5in9A0Yfa8GPIK7NjjtRDtB9noaTS/OmfOUb2HgMr6mS8IagsEDVZxrJXSXR6argQiatwbVpuQmxfLggeGdDOqfJCe6ioUQQlARcP04dGG9gtgufCrzrai32mo8w2qcW8kJplY/mw8UzI6/CEsdKaW79cAzEoeBizKUGxa33zLmwNcaw5Q9EYzVy7pQcKQAgANQCltNEBTk8HVy3pYBbdu3Um5q4b8RYVhi9B1qO0YXUSN6RIgRAEE9P4dPlgEut4vGgg2jhQLF+aRlDgUgEmTp+HXdZRh8Om+vRHXGpCA1avWYjabAZg/L5f583LRdf3fE/DOtiLyFy0hOXkkZWWH+fa7apQR2XdiUAJKSoqZNetekpNHcuKEi9K9uwfUHDpM+F/ifwEDFqD7gwMda48blIABmRDgtwuNOJ138fiypxg/bgIJCUk8/czSiOsEd0AZrQAWa/gRsaRkB83NTVitNrKz72PEiFFhrbN0ZRUvdOyAJvKDUpCQaGLiFAs1Z9r7LXT+/M/kL76fcWl3olDU1p7td018oolJUzv/ht8HL4CrcYbN0k4DkNzervhot4dDn3nDSj/hwpllZcmKeIYOMwEENEMypqW5qjv3vKpuxmwl7AeGAFy9rPPhTg8nXX3nv3AxxmGmcLmdtAmWEKUQXnKmlm+GXpGs8tyM8VqAtxXkhLj6n3y8/25XAg4XQ4eZWLw0jumzbEhXl3rgeefY8i9CRJ+uq3JnzVVKNgGTQlz1yTbeK77O5Yv/nBesVo0FDw4hN68rgoniGpq8GWvEbXY4Pu9hsJva/siRnCh7iu9JQa1TMBwgEICyQ15KS1po8fTMipomZM+NYVFh7xBKsaioV9IdZVf76tPv3FXUTbeb0dYoYSVgg2BM/2RPC4e/9BLQFVMzbTy6zE7yqM7PigL2GIZpTX/nxbAHv9J9z+1iGK8jaklond+n0HWwxfQo40Jpq5yO4xXh1I3ocApQ5b47A2Vs7G7UDriVYo1zbHmpCGHPTcQCQqisy0oXTbIVWEVR7U697atHZE/Eh4i/AL3dqyfOIzDLAAAAAElFTkSuQmCC\">

        <script src=\"https://cdn.jsdelivr.net/npm/vue/dist/vue.js\"></script>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        <title>{% block title %}Torre!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/segus/Documentos/TorreTechnicalTest/TorreBio/templates/base.html.twig");
    }
}
