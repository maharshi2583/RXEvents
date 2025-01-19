    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="accordion accordion-flush" id="requestProposal">
                    <div class="accordion-item">
                        <h1 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                REQUEST A PROPOSAL
                                <div id="open"><span id="closed"></span></div>
                            </button>
                        </h1>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#requestProposal">
                            <div class="container p-4">
                                <form method="POST" action="">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" name="fname"
                                                    placeholder="FIRST NAME *" required>
                                                <label for="floatingInput">FIRST NAME *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" name="lname"
                                                    placeholder="LAST NAME*" required>
                                                <label for="floatingInput">LAST NAME*</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInput" name="email"
                                                    placeholder="YOUR EMAIL *" required>
                                                <label for="floatingInput">YOUR EMAIL *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    pattern="^\d*$" name="participants"
                                                    placeholder="EXPECTED PARTICIPANTS">
                                                <label for="floatingInput">EXPECTED PARTICIPANTS</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    name="company" placeholder="ASSOCIATION / COMPANY *" required>
                                                <label for="floatingInput">ASSOCIATION / COMPANY *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    name="website" placeholder="YOUR EVENT WEBSITE">
                                                <label for="floatingInput">YOUR EVENT WEBSITE</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    pattern="^\d*$" name="budget" placeholder="APPROXIMATE BUDGET">
                                                <label for="floatingInput">APPROXIMATE BUDGET</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" name="interesed">
                                                    <option selected disabled>Open this select menu</option>
                                                    <option value="Conference Management">Conference Management</option>
                                                    <option value="Virtual & hybrid solutions">Virtual & hybrid
                                                        solutions
                                                    </option>
                                                    <option value="Association management">Association management
                                                    </option>
                                                    <option value="Anything else">Anything else</option>
                                                </select>
                                                <label for="floatingSelectGrid">Interesed In</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="YOUR MESSAGE *"
                                                    id="floatingTextarea" name="message"></textarea>
                                                <label for="floatingTextarea">YOUR MESSAGE *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4 justify-content-center">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <button class="btn btn-outline-main" type="submit">SEND <i
                                                    class="fa-regular fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>