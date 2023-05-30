
<div class="modal fade" id="mailModal" tabindex="-1" aria-labelledby="mailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="mailModalLabel">Envoyer un email</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="#">
                @csrf
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir envoyer cet email ?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="enable" id="enable">
                        <label class="form-check-label" for="enable">
                            Activer l'entreprise
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-info">
                        <i class="fa-regular fa-envelope"></i>
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>