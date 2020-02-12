<section>
    <form action="#contact" method="POST" class="form">
        <div class="form">
            <label for="name">Nom: </label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form">
            <label for="email">Mail: </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>     
            <label for="mesage">Message:</label>
            <textarea id="message" name="user_message" cols="40" row="6" required></textarea> 
        </div>
        <div class="form">
            <input id="contact"type="submit" value="Envoyer">
        </div>
    </form>
</section>