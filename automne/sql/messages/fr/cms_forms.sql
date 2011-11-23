#----------------------------------------------------------------
#
# Messages content for module cms_forms
# French Messages
#
#----------------------------------------------------------------
# $Id: cms_forms.sql,v 1.2 2010/01/27 13:45:05 sebastien Exp $

DELETE FROM messages WHERE module_mes = 'cms_forms' and language_mes = 'fr';

INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(1, 'cms_forms', 'fr', 'Formulaires');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(2, 'cms_forms', 'fr', 'Voici les formulaires qui ont été reçus par l''application. Vous pouvez en exporter les données ou supprimer le contenu existant.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(3, 'cms_forms', 'fr', 'Formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(4, 'cms_forms', 'fr', 'Enregistrements');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(5, 'cms_forms', 'fr', 'Dernier envoi');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(6, 'cms_forms', 'fr', 'Aucun résultat trouvé');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(7, 'cms_forms', 'fr', 'Exporter');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(8, 'cms_forms', 'fr', 'Supprimer');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(9, 'cms_forms', 'fr', 'Confirmez-vous la suppression de l''action ''%s'' ?');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(10, 'cms_forms', 'fr', 'Données reçues');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(11, 'cms_forms', 'fr', 'Formulaires disponibles pour les utilisateurs');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(12, 'cms_forms', 'fr', 'Voici les formulaires disponibles.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(13, 'cms_forms', 'fr', 'Fichier');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(14, 'cms_forms', 'fr', 'Adresse');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(15, 'cms_forms', 'fr', 'Date d''insertion');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(16, 'cms_forms', 'fr', 'Confirmez-vous la suppresion du formulaire ''%s'' ?');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(17, 'cms_forms', 'fr', 'Insérer un document PDF');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(18, 'cms_forms', 'fr', 'Erreur lors de l''insertion du fichier !');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(19, 'cms_forms', 'fr', 'Nom du formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(20, 'cms_forms', 'fr', 'Ajouter un formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(21, 'cms_forms', 'fr', 'Gestion des catégories :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(22, 'cms_forms', 'fr', 'Gestion des accès par groupes d''utilisateurs :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(23, 'cms_forms', 'fr', 'Gestion des formulaires :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(24, 'cms_forms', 'fr', 'Lister');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(25, 'cms_forms', 'fr', 'Accueil');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(26, 'cms_forms', 'fr', 'Libellé');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(27, 'cms_forms', 'fr', 'Nom du formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(28, 'cms_forms', 'fr', 'Source XHTML');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(29, 'cms_forms', 'fr', 'Actif');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(30, 'cms_forms', 'fr', 'Catégories');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(31, 'cms_forms', 'fr', 'Une erreur est survenue lors de la suppression du formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(32, 'cms_forms', 'fr', 'Veuillez vérifier la syntaxe XHTML de votre formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(33, 'cms_forms', 'fr', 'Une erreur est survenue lors de l''ajout des catégories');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(34, 'cms_forms', 'fr', 'Une erreur est survenue lors de l''ajout de la catégorie %s');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(35, 'cms_forms', 'fr', 'Vous devez sélectionner au minimum une catégorie');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(36, 'cms_forms', 'fr', 'Actions du formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(37, 'cms_forms', 'fr', 'Aucun élément n''est sélectionné');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(38, 'cms_forms', 'fr', 'Type d''action');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(39, 'cms_forms', 'fr', 'Valeurs insérées en base de données');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(40, 'cms_forms', 'fr', 'Si la saisie du formulaire n''est pas correcte');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(41, 'cms_forms', 'fr', 'Si la saisie du formulaire est correcte');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(42, 'cms_forms', 'fr', 'Envoi des valeurs du formulaire à un ou plusieurs emails fournis');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(43, 'cms_forms', 'fr', 'Envoi des valeurs du formulaire à un email fournis dans un champ du formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(44, 'cms_forms', 'fr', 'Oui');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(45, 'cms_forms', 'fr', 'Non');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(46, 'cms_forms', 'fr', 'Merci, votre message est enregistré.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(47, 'cms_forms', 'fr', 'Stocker les valeurs du formulaire dans un fichier CSV');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(48, 'cms_forms', 'fr', 'Nombre de réponses max :<br /><small>(par utilisateurs)</small>');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(49, 'cms_forms', 'fr', 'Saisissez le nombre maximum de réponses désirées par utilisateur, ou laissez vide pour ne pas limiter ce nombre');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(50, 'cms_forms', 'fr', 'Afficher un texte');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(51, 'cms_forms', 'fr', 'Rediriger vers une page');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(52, 'cms_forms', 'fr', 'Si le nombre de réponses est dépassé');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(53, 'cms_forms', 'fr', 'Actions actuelles :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(54, 'cms_forms', 'fr', 'Ajouter une action :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(55, 'cms_forms', 'fr', 'Saisissez votre liste d''emails (séparateur virgule ou point-virgule)');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(56, 'cms_forms', 'fr', 'Saisissez le message d''entête pour les emails');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(57, 'cms_forms', 'fr', 'Texte à afficher');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(58, 'cms_forms', 'fr', 'Champ(s) du formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(59, 'cms_forms', 'fr', 'Fichier CSV');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(60, 'cms_forms', 'fr', 'Vous pourrez télécharger ici le fichier CSV lorsque des données seront disponibles.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(61, 'cms_forms', 'fr', 'Aucun champ pouvant contenir un email n''a été trouvé dans le formulaire.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(62, 'cms_forms', 'fr', 'Catégorie');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(63, 'cms_forms', 'fr', 'Trouver un formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(64, 'cms_forms', 'fr', 'Sélection d''un formulaire');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(65, 'cms_forms', 'fr', 'Sélectionner');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(66, 'cms_forms', 'fr', 'Déselectionner');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(67, 'cms_forms', 'fr', 'Veuillez compléter les champs requis :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(68, 'cms_forms', 'fr', 'Le contenu de ces champs est incorrect :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(69, 'cms_forms', 'fr', 'Message du formulaire ''%s'' du site ''%s''');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(70, 'cms_forms', 'fr', 'Saisissez le message de fin pour les emails');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(71, 'cms_forms', 'fr', 'Saisissez le sujet des emails');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(72, 'cms_forms', 'fr', 'Télécharger les données du formulaire au format CSV');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(73, 'cms_forms', 'fr', 'Confirmez-vous la suppression des données enregistrées pour le formulaire ''%s'' ?');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(74, 'cms_forms', 'fr', 'Remise à zéro');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(75, 'cms_forms', 'fr', 'Authentifier l''utilisateur');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(76, 'cms_forms', 'fr', 'Aucun champ pouvant contenir un identifiant utilisateur n''a été trouvé dans le formulaire.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(77, 'cms_forms', 'fr', 'Aucun champ pouvant contenir un mot de passe utilisateur n''a été trouvé dans le formulaire.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(78, 'cms_forms', 'fr', 'Identifiant');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(79, 'cms_forms', 'fr', 'Mot de passe');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(80, 'cms_forms', 'fr', 'Message à afficher si l''authentification est incorrecte');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(81, 'cms_forms', 'fr', 'Se souvenir du compte');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(82, 'cms_forms', 'fr', 'Aucun champ pouvant servir à retenir le compte utilisateur n''a été trouvé dans le formulaire.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(83, 'cms_forms', 'fr', 'Cette action n''est pas autorisée durant l''édition ou la prévisualisation de la page.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(84, 'cms_forms', 'fr', 'Vous devez avoir ''%s'' actif dans votre profil pour pouvoir Créer / Editer un formulaire.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(85, 'cms_forms', 'fr', '<div class="rowComment">\n<h1>Formulaire &agrave; choisir pour une page :</h1>\n<div class="retrait"><span class="code">&lt;block module=&quot;cms_forms&quot; id=&quot;form&quot;&gt;<span class="vertclair">{{data}}</span>&lt;/block&gt;</span>\n<ul><li><span class="vertclair">{{data}} : </span>Sera remplacé par le formulaire &agrave; afficher.</li></ul>\n</div>\n</div>');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(86, 'cms_forms', 'fr', '<div class="rowComment">\n<h1>Formulaire &agrave; afficher pour toutes les pages employant le modèle :</h1>\n<div class="retrait"><span class="code">&lt;atm-clientspace module=&quot;cms_forms&quot; id=&quot;form&quot; type=&quot;formular&quot; formID=&quot;<span class="keyword">formID</span>&quot;/&gt;</span>\n<ul><li><span class="keyword">formID : </span>Identifiant du formulaire &agrave; afficher.</li></ul>\n</div>\n</div>');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(87, 'cms_forms', 'fr', 'Assistant de création de formulaires');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(88, 'cms_forms', 'fr', 'Adresse d''émission');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(89, 'cms_forms', 'fr', 'Avec la date de soumission');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(90, 'cms_forms', 'fr', '[Erreur : vous ne devez pas copier-coller le code d''un formulaire dans un autre formulaire !]');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(91, 'cms_forms', 'fr', 'Le formulaire a expiré suite à une longue inactivité. Veuillez le soumettre à nouveau.');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(92, 'cms_forms', 'fr', 'Extensions autoris&eacute;es :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(93, 'cms_forms', 'fr', 'Poids maximum :');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(94, 'cms_forms', 'fr', 'Executer du code PHP spécifique');
INSERT INTO `messages` (`id_mes`, `module_mes`, `language_mes`, `message_mes`) VALUES(95, 'cms_forms', 'fr', 'Nom du fichier PHP à exécuter. Ce fichier doit se trouver dans /automne/templates/');
