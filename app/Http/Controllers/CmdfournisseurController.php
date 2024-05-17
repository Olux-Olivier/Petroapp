<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Article;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Models\Cmdfournisseur;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Requests\CmdfournisseurRequest;

class CmdfournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cmdfournisseurs = Cmdfournisseur::all();
        
        foreach($cmdfournisseurs as $cmdfournisseur){

            $nom_article = Article::find($cmdfournisseur->article_id);
            $nom_fournisseur = Fournisseur::find($cmdfournisseur->fournisseur_id);

            $cmdfournisseur['article'] = $cmdfournisseur->article_id ;
            $cmdfournisseur->article_id = $nom_article->nom;
            $cmdfournisseur->fournisseur_id = $nom_fournisseur->nom;
            
        }
        
        return view('Cmdfournisseurs.index', ['cmdfournisseurs' => $cmdfournisseurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        $fournisseurs = Fournisseur::all();
        return view('Cmdfournisseurs.create', compact('articles', 'fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CmdfournisseurRequest $request)
    {
        Cmdfournisseur::create($request->validated());

        $article = Article::where('id', $request->article_id)->get(['nom']);
        $articleCommander = $article[0]['nom'];

        $mailFournisseur = $request->email;

        $nom = Fournisseur::where('id', $request->fournisseur_id)->get(['nom']);
        $nomFournisseur = $nom[0]['nom'];

        $quantiteCommander = $request->qte;
        $prix = $request->prix;

        $this->sendmail($mailFournisseur, $nomFournisseur, $articleCommander, $quantiteCommander, $prix);
        return to_route('cmdfournisseur.index')->with('succes', "commande passée avec succés !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cmdfournisseur $cmdfournisseur)
    {
        //
    }

    public function livre(Request $request){
         // changement d'etat de la commande
        return to_route('cmdfournisseur.index');
    }

    public function sendmail($mailFournisseur, $nomFournisseur, $articleCommander, $quantiteCommander, $prix){
        
        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'olivierkasongo539@gmail.com';                     //SMTP username
            $mail->Password   = 'busnaihdixhkpmyg';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('olivierkasongo539@gmail.com', 'PetroApp');
            $mail->addAddress($mailFournisseur, $nomFournisseur);     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Passation commande';
            $mail->Body    = 'Bonjour Cher '. $nomFournisseur .', 
            ce mail est l\'objet de notre commande pour l\'article <strong>'.$articleCommander.'</strong>, 
            avec comme quantité en litre <strong>'.$quantiteCommander.'</strong> Litres. le prix unitaire par litre
            et de <strong>'.$prix.'</strong> Nous sommes en attente de livraison avec comme delai de 3 jours';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}
