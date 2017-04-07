/*
    partie 1 : on importe les dépendances
*/
import { Component } from '@angular/core';
// import { SearchPipe } from './search.pipe';
// import { OrderbyPipe } from "./orderby.pipe";
// import { Contact } from './contact';
import { ContactformComponent } from './contactform.component';


/* partie 2 : on "décore" notre component avec les élément suivants:
    selector, template, styles[], pipes[], directives[]
*/
@Component({
  /*
    On donne un nom au sélecteur qui contient TOUT notre composant.
    On peut alors utiliser la balise <app-root></app-root>
    dans l'index.html OU dans un autre composant
  */
  selector: 'app-root',
  /*
    On définit les styles CSS liés à notre component
  */
  styles: [`
    .myReq {color: #B52E31}
    ul {margin-left:20px}
    .contacts {padding-bottom:7px; padding-top:7px; border-bottom:1px solid #e7e8e9;clear:both}
    .contacts span {font-weight:bold; font-size:1.2em}
    .contacts img {width:48px; height:48px}
    .details {background:#fff; border:1px solid #ccc; border-radius:5px}
    .details li {text-align:left;padding-bottom:20px;list-style:none; font-size:17px;font-weight:bold; color: #456}
    .contacts:hover {cursor:pointer; background: #f7f8f9;}
    .badge{background: #C9302C}
  `],
  /*
    On définit le template HTML de notre component
  */
  template: `
  <div class="page-header">
    <h1>Vous avez {{contacts.length}} contacts dans la liste</h1>
    <add-contact-form [contacts]="contacts"></add-contact-form>
  </div>

  <div class='col-lg-6'>

  <div class="section">
    <div class="col-lg-6">
      <div class="form-group">
        <label>Rechercher</label>
        <input class="form-control" placeholder="Rechercher par prénom" type="text" [(ngModel)]="word" />
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
      <label>Trier</label>
        <select class="form-control" [(ngModel)]="order">
          <option value='firstname'>par ordre alphabétique</option>
          <option value='timestamp'>Par date</option>
        </select>
      </div>
    </div>
  </div>

    <div (click)="showDetails(contact)" class="contacts" [class.myReq]="contact.pro" *ngFor="let contact of contacts | search:word | orderBy:order">
      <button class="btn btn-danger" (click)="deleteContact(contact)">X</button>
      <img *ngIf="contact.image" [src]="contact.image" />
      <img *ngIf="!contact.image" src="https://cdn4.iconfinder.com/data/icons/angular-emotion/30/emotion-surprised-face-emoji-avatar-bored-1-128.png" />
      <span>{{contact.firstname | uppercase}}</span>
    </div>

    </div>

    <div class='col-lg-4 col-lg-offset-2 details'>
    <div *ngIf="details">
      <h3>Détails</h3>
      <h4 *ngIf="details.pro"><span class="badge">PRO</span></h4>
      <p>Contact ajouté le {{details.timestamp * 1000 | date:'d/MM/y'}}</p>
      <ul>
        <li>Prénom : {{details.firstname}}</li>
        <li>Email : {{details.email}}</li>
        <li>Téléphone : {{details.phone}}</li>
        <li>Adresse : {{details.address}} {{details.cp}} {{details.city}}</li>
      </ul>
      <button class="btn" (click)="hideDetails()">Cacher les détails</button>
    </div>
    <div class="text-center" *ngIf="!details">
      <p>Cliquez sur un nom pour afficher les détails</p>
    </div>
    </div>
  `

})

/*
  Partie 3 : On définit la class de notre component.
  Elle contient toute les données et les fonctions liées à notre component
*/
export class AppComponent {

  // On initialise les variables dont le component a besoin pour fonctionner
  details:Object;
  contacts = [
    {isActive:false, email: 'marie@gmail.com', firstname: 'Marie', phone: '0688546622', address: '22 rue de l\'Elysée', cp:'75015', city: 'Paris', pro : false, timestamp: 1476264134, image: "https://randomuser.me/api/portraits/thumb/women/68.jpg" },
    {isActive:false, email: 'noah@laposte.net', firstname: 'Noah', phone: '0752824525', address: '2 allée des roses', cp:'93200', city: 'St Denis', pro : false, timestamp: 1460256014, image: "https://randomuser.me/api/portraits/thumb/men/61.jpg"},
    {isActive:false, email: 'bill.gates@microsoft.com', firstname: 'Bill', phone: '0621554738', address: '77 Avenue du Général de Gaulle', cp:'75008', city: 'Paris',pro : true, timestamp: 1469022000, image: "https://randomuser.me/api/portraits/thumb/men/69.jpg"},
    {isActive:false, email: 'steve.jobs@pomme.fr', firstname: 'Steve', phone: '0657825424', address: '1 rue Charles Tillon', cp:'93300', city: 'Aubervilliers',pro : false, timestamp: 1473082800, image: "https://randomuser.me/api/portraits/thumb/men/46.jpg" },
    {isActive:false, email: 'claire@hotmail.com', firstname: 'Claire', phone: '0622353542', address: '47 rue du Maine', cp:'75014', city: 'Paris', pro : false, timestamp: 1473082800, image: false },
    {isActive:false, email: 'nat@gmail.com', firstname: 'Nathalie', phone: '0784559975', address: '155 Avenue de Flandre', cp:'75019', city: 'Paris',pro : false, timestamp: 1473082800, image: "https://randomuser.me/api/portraits/thumb/women/18.jpg" },
    {isActive:false, email: 'mark.zuck@facebook.com', firstname: 'Mark', phone: '0756458211', address: '10 Bld de Montmorency', cp:'75016', city: 'Paris', pro : false, timestamp: 1473082800, image: "https://randomuser.me/api/portraits/thumb/men/86.jpg" }
  ];

  // On déclara la variable search qui prendra en valeur le mot entré par l'utilisateur dans le champ de recherche
  search:any;

  /*
    La fonction qui retourne le nombre de de contacts dans la liste
    (idem qu'un this.contacts.length mais avec une fonction for in)
  */
  totalResults() {
    // return this.contacts.length;
    let sum = 0;
    for(let contact in this.contacts) {
      sum++ ;
    }
    return sum;
  }

  /*
    Fonction: deleteContact()
    Description: Permet de supprimer un contact dans le tableau contacts
    @param: prend en paramètre l'objet friend
  */
  deleteContact(contact) {
    if(confirm('Voulez-vous vraiment supprimer ' + contact.firstname + ' : index ' + this.contacts.indexOf(contact))) {
      let index = this.contacts.indexOf(contact);

      // indexOf renvoie l'index de l'entrée du tableau.
      // Si l'entrée n'existe pas indexOf renvoie -1
      if (index > -1) { this.contacts.splice(index, 1) }

      // Si le contact que l'on veut supprimer est aussi le contact affiché en détails
      // On cache le détail avec la fonction hideDetails() (fonction que l'on a déclarée plus bas)
      if(contact == this.details ) {this.hideDetails()};
    }

  }



  /*
    Fonction: showDetails()
    Description: Permet d'afficher les détails d'un contact
  */
  showDetails(contact) {
    console.log(contact);
    contact.isActive = true;
    this.details = contact;
  }



  /*
    Fonction: delDetails()
    Description: Permet de cacher les détails d'un contact de l'affichage courant
  */
  hideDetails() {
    this.details = false;
  }




} // Fin class AppComponent qui définit le composant principal de notre Application
