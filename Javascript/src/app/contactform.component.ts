import { Component, Input } from '@angular/core';
//import { Contact } from './contact';

@Component({
  selector: 'add-contact-form',
  styles: [`
    .form-control{margin-bottom:11px}
    input[type='checkbox'] {left: 91px;top: -11px;}
  `],
  template: `
    <!-- Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Ajouter un contact
    </button>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Ajouter un contact</h4>
          </div>
          <div class="modal-body">
          <form #addcontactForm="ngForm"  (ngSubmit)=addNewContact($event)>
            <input [(ngModel)]="contact.firstname" name="firstname" class="form-control" (focus)="toggle(true)" placeholder="Prénom" type="text" />
            <input [(ngModel)]="contact.email" name="email" class="form-control" (focus)="toggle(true)" placeholder="Email (optionnel)" type="text" />
            <input [(ngModel)]="contact.phone" name="phone" class="form-control" ngControl="phone" placeholder="Téléphone (optionnel)" type="text" />
            <input [(ngModel)]="contact.address" name="address" class="form-control" ngControl="address" placeholder="Adresse (optionnel)" type="text" />
            <input [(ngModel)]="contact.cp" name="cp" class="form-control" ngControl="cp" placeholder="Code postal (optionnel)" type="text" />
            <input [(ngModel)]="contact.city" name="city" class="form-control" ngControl="city" placeholder="Ville (optionnel)" type="text" />

                <label class="checkbox-inline">
                  <input [(ngModel)]="contact.pro" name="pro" id="pro" class="form-control" ngControl="pro" type="checkbox" />
                  Contact Pro:
                </label>
            <hr>
            <button class="btn btn-primary" type="submit">Ajouter</button>
            <span (click)="toggle(false)" *ngIf="fullForm">X</span>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>
  `
})
export class ContactformComponent {
  contact = {};
  @Input() contacts:any[];

  addNewContact = function(event) {
    event.preventDefault();
     console.log(this.contact)
     // On charge le nouveau contact dans la variable newContact
     let newContact = this.contact;
     console.log(newContact);

     // On teste si le contact n'est pas vide
     if(newContact.hasOwnProperty('firstname')==false) {
       alert('Vous devez spécifiez au moins un prénom!');
     }
     else if(newContact.firstname.trim() == '') {
       alert('Vous devez spécifiez au moins un prénom!');
     }

     // Si le contact n'est pas vide alors on l'ajoute à la listes des contacts
     else {
       newContact.timestamp = Math.floor(Date.now() / 1000);
       // newContact.pro = false;
       newContact.image = false;

       // On push le nouveau contact dans le Array contacts
       this.contacts.push(newContact);
       this.contact={};

       // On peut sauvegarder l'objet contacts dans le localStorage
       // On efface le formulaire
       document.querySelector('form').reset();

       // On ferme la boite modal en JS avec la fonction hide() de bootstrap
       let dialogBox = document.getElementsByClassName('modal-backdrop')[0];
       if(dialogBox!=null) {
         document.querySelectorAll('#myModal')[0].classList.remove('in');
         dialogBox.parentNode.removeChild(dialogBox);
       }

     }

  }

  toggle(value) {
    // this.fullForm = value;
    // console.log(this.fullForm);
  }


}
