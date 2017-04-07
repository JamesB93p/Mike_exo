// partie 1 : on importe les dépendances
import { Component } from '@angular/core';

// partie 2 : on "décore" notre component avec les élément suivants:
// selector, template, styles[], ...
@Component({
  selector: 'nav-bar',
  template: `
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          {{logo}}
        </a>
      </div>
    </div>
  </nav>
  `

})
// Partie 3 : on crée la class
export class NavbarComponent {
  logo = "AdressBook App"
}
