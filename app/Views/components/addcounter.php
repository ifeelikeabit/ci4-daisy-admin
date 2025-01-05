<div class="row">
    <!-- Form İçeriği -->
    <div class="col-xl-6 col-md-12 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <form action="/component/add" method="get">
                    <div class="mb-3">
                        <label for="tables" class="form-label">tables</label>
                        <select class="form-select" name="status" required>
                            <option value="user">user</option>
                            <option value="page">page</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="colors" class="form-label">colors</label>
                        <select class="form-select" name="color" required>
                            <option value="primary" class="text-primary">primary</option>
                            <option value="success" class="text-success">success</option>
                            <option value="secondary" class="text-secondary">secondary</option>
                            <option value="danger" class="text-danger">danger</option>
                            <option value="warning" class="text-warning">warning</option>
                            <option value="info" class="text-info">info</option>
                            <option value="light" class="text-light bg-dark">light</option>
                            <option value="dark" class="text-dark">dark</option>
                            <option value="muted" class="text-muted">muted</option>
                            <option value="white" class="text-white bg-dark">white</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">message</label>
                        <input type="text" name="message" />
                        <button type="submit">add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 
</div>
