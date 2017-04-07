import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule }   from '@angular/forms'; // <-- NgModel
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { ContactformComponent} from './contactform.component';
import { NavbarComponent} from './navbar.component';

import { SearchPipe } from './search.pipe';
import { OrderbyPipe } from './orderby.pipe';

@NgModule({
  declarations: [
    AppComponent,
    ContactformComponent,
    NavbarComponent,
    SearchPipe,
    OrderbyPipe
  ],
  imports: [
    BrowserModule,
    FormsModule, // <-- import the FormsModule avant d'utiliser [(ngModel)]
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent, NavbarComponent]
})
export class AppModule { }
