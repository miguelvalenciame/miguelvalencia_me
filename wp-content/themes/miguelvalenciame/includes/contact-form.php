      <form action="contact-form-inc.php" method="post">
          <!-- form STARTS -->

          <div class="form-group">
              <!-- form-group STARTS -->

              <input class="form-control" type="text" name="name" placeholder="Nombre Completo" required>

          </div><!-- form-group ENDS -->

          <div class="form-group">
              <!-- form-group STARTS -->

              <input class="form-control" type="email" name="email" placeholder="Email de Contacto" required>

              <small id="emailHelp" class="form-text text-muted">No comparto tu mail con
                  nadie.</small>

          </div><!-- form-group ENDS -->


          <div class="form-group">
              <!-- form-group STARTS -->

              <textarea class="form-control" name="message" cols="30" rows="5" style="resize:none;"
                  placeholder="¿Qué te gustaría que tu pagina web hiciera por tu negocio?"></textarea>

          </div><!-- form-group ENDS -->

          <button class="btn btn-secondary form-control " type="submit" name="submit">Enviar </button>

      </form> <!-- form ENDS -->