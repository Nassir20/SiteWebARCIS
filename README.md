# SiteWebARCIS
Projet de cours final !!


controller : 


    /**
     * @Route("/compex", name="compex")
     */
    public function compex()
    {
        return $this->render('blog/compex.html.twig');
          
    }
    
    
    
    
 Templates : 
 
 
 
 {% extends 'base.html.twig' %}

{% block title %}Compétence 3 {% endblock %}

{% block body %}
<head>
    
</head>


<body>
    <br>
    <center>
        <h1>Utiliser un système informatique et ses outils<br>(intro système, fichiers, CLI, zips, outils collaboratifs sur Internet,<br> hygiène informatique... : référentiel PIX et CyberEdu)</h1>
        <br>
        <p>Cette compétence regroupe des modules différents cette fois ci, comme R108 et SAE11 <br> Il faut savoir que cette compétence est à propos de la manière dont ont utilise du matériel informatique <br>
        Etant donné que je suis passionné d'informatique et que je passe du temps sur des ordinateurs depuis de nombreuses années maintenant <br> l'hygiène informatique est un 
        domaine dans lequel je me suis intéresser assez tôt ( dans l'optimisationd de son espace de travail ... ) <br> Mais surtout avec notamment la SAE11 ont s'interesse beaucoup au
        coté cybersécurité de l'informatique.<br> Un domaine dans lequel je pratique et m'instruit depuis plusiseurs années aussi.<br>
        Je pense donc avoir toutes les compétances nécessaires pour remplire cette compétence.</p>
    </center>


    <br><br><br>
    <center>
        <button onclick="window.location.href = '/portfolio';" class="btn btn-primary btn-lg">Retour           
        </button>    
    </center> 

    <br>
    <center>
        <form>
        <input type="button" value="Imprimer la page" onClick="window.print()">
        </form> 
    </center>


</body>

<br><br><br><br><br><br><br><br><br>
<Footer>
  <table class="table table-hover">    
  <tr class="table-danger"> 
        <th scope="row">Arcis Etienne</th>
        <td>Ne pas copier</td>
        <td>Tout droits réservé</td>
        <td>© </td>
      </tr>
</footer> 
{% endblock %}
