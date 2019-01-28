<!DOCTYPE html>
<html>
    <head>

        <title>SukaProd</title>

        <meta name="viewport" content="width=device-width">

        <link rel="canonical" href="https://www.sukaprod.com/">

        <link rel="icon" type="image/png" href="https://www.sukaprod.com/img/ico.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/pub.css">

    </head>

    <body>
        <h1>Choisissez votre publicité</h1>

        <section>
            <article>
                <iframe src="pub/tarifs.pdf" width="600" height="700" align="middle"></iframe>
                <a href="pub/tarifs.pdf">Téléchager la fiche des tarifs</a>
            </article>
            <article>
                <form method="post" action="pub_result.php">
                    <fieldset>
                        <legend>Où voulez-vous placez vos publicités ?</legend>
                        <div>
                            <table>
                                <tr>
                                    <td><label for="accueil">Accueil :</label></td>
                                    <td><input type="checkbox" name="unepub[]" value="0101" id="acceuil1" onclick="calcul(id);"><span>zone 1</span></td>
                                    <td><input type="checkbox" name="unepub[]" value="0102" id="acceuil2" onclick="calcul(id);"><span>zone 2</span></td>
                                    <td><input type="checkbox" name="unepub[]" value="0103" id="acceuil3" onclick="calcul(id);"><span>zone 3</span></td>
                                </tr>
                                <tr>
                                    <td><label for="jeux">Jeux :</label>
                                    <td><input type="checkbox" name="unepub[]" value="0201" id="jeux1" onclick="calcul(id);"><span>zone 1</span></td>
                                    <td><input type="checkbox" name="unepub[]" value="0202" id="jeux2" onclick="calcul(id);"><span>zone 2</span></td>
                                </tr>
                                <tr>
                                    <td><label for="musique">Musique :</label>
                                    <td><input type="checkbox" name="unepub[]" value="0301" id="musique1" onclick="calcul(id);"><span>zone 1</span></td>
                                    <td><input type="checkbox" name="unepub[]" value="0302" id="musique2" onclick="calcul(id);"><span>zone 2</span></td>
                                </tr>
                                <tr>
                                    <td><label for="contact">Contact :</label>
                                    <td><input type="checkbox" name="unepub[]" value="0401" id="contact1" onclick="calcul(id);"><span>zone 1</span></td>
                                </tr>
                            </table>
                            <p id="tot" >Total 0 €/mois</p>
                            <div>
                                <script>
                                    var tot = 0;
                                    function calcul(hidey){
                                        var elem = document.getElementById('tot');
                                        var prix = 0;

                                        if(document.getElementById(hidey).checked == true)
                                        {
                                            console.log('Checkbox coché !');
                                            var chek = document.getElementById(hidey).value;
                                            console.log(chek);
                                            var x = chek[0] + chek[1];
                                            var y = chek[2] + chek[3];
                                            console.log("x : " + x);
                                            console.log("y : " + y);

                                            if(y == '01' || y == '03')
                                            {
                                                prix = 1;
                                            }
                                            else if(y == '02')
                                            {
                                                prix = 2;
                                            }                                            
                                            else
                                            {
                                                prix = 'error';
                                            }
                                            console.log('prix case : ' + prix)

                                            if(x == '01')
                                            {
                                                prix = prix * 1.5;
                                            }
                                            else if(x == '02')
                                            {
                                                //prix = prix * 1;
                                            }
                                            else if(x == '03')
                                            {
                                                //prix = prix * 1;
                                            }
                                            else if(x == '04')
                                            {
                                                prix = prix * 0.5;
                                            }
                                            else
                                            {
                                                prix = 'error';
                                            }
                                            console.log('prix case : ' + prix)
                                            tot = tot + prix;
                                            console.log('total : ' + tot)
                                        }
                                        else
                                        {
                                            var Dcheck = 0;
                                            console.log('Checkbox décoché !');
                                            var chek = document.getElementById(hidey).value;
                                            console.log(chek);
                                            var x = chek[0] + chek[1];
                                            var y = chek[2] + chek[3];
                                            console.log("x : " + x);
                                            console.log("y : " + y);

                                            if(y == '01' || y == '03')
                                            {
                                                Dcheck = 1;
                                            }
                                            else if(y == '02')
                                            {
                                                Dcheck = 2;
                                            }                                            
                                            else
                                            {
                                                Dcheck = 'error';
                                            }
                                            console.log('en moins : ' + Dcheck)

                                            if(x == '01')
                                            {
                                                Dcheck = Dcheck * 1.5;
                                            }
                                            else if(x == '02')
                                            {
                                                //Dcheck = Dcheck * 1;
                                            }
                                            else if(x == '03')
                                            {
                                                //Dcheck = Dcheck * 1;
                                            }
                                            else if(x == '04')
                                            {
                                                Dcheck = Dcheck * 0.5;
                                            }
                                            else
                                            {
                                                Dcheck = 'error';
                                            }
                                            console.log('en moins : ' + Dcheck)

                                            tot = tot - Dcheck;
                                        }
                                        elem.innerHTML = "<p>Total " + Math.round(tot*100)/100 + " €/mois";
                                    }
                                </script>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Commentaire : </legend>
                        <div>
                            <textarea id="com" name="com" required="required"  minlength="20" row="5" cols="20" placeholder="décrivez votre demande : combien de temps vous voulez votre pub, vos questions etc"></textarea>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Vos coordonnées : </legend>
                        <div>
                            <div>
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="prenom" maxlength="25" placeholder="Robert" id="prenom" required="required" />
                            </div>
                            <div>
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" maxlength="25" placeholder="Duprés" id="nom" required="required"  />
                            </div>
                        </div>
                        <div>
                            <label for="entreprise">Entreprise (pas obligatoire) :</label>
                            <input type="text" name="entreprise" maxlength="40" placeholder="KBroneProno" id="entreprise"/>
                        </div>
                        <div>
                            <label for="mail">Mail :</label>
                            <input type="email" name="mail" maxlength="50" placeholder="robert.dupres@koala.com" id="mail" required="required"  />
                        </div>
                    </fieldset>

                    <input type="submit" value="Envoyer" />
                </form>
            </article>
        </section>
    </body>
</html>