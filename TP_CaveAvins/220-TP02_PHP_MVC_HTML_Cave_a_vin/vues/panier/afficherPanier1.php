<div>
    <h1>Liste des articles du panier</h1>
    <br>
    <table id="tabArticles" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Région</th>
                <th>Nom</th>
                <th>robe</th>
                <th>prix unitaire ht</th>
                <th>qtt</th>
                <th>prix total ht</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($article as $articles)

                echo
                '<tr> -
        <td>' . $articles['region'] . '</td> 
        <td>' . $articles['nom'] . '</td> 
        <td>' . $articles['robe'] . '</td>
        <td>' . $articles['prix_ht'] . '</td> 
        <td>'. $articles['qtt_art'].'</td>
        <td>afficher le prix total article </td>
      </tr>';
            ?>


        </tbody>
    </table>
    <p class="h3">Prix total ht du panier :
        <!-- afficher le prix total -->
    </p>
</div>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabArticles').dataTable({
            "pageLength": 3,
            "language": {
                "url": 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json'
            }
        });
    });
</script>




<!-- 
        