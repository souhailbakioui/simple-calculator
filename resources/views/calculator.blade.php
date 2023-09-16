<div class="container">
    <h1>Simple Calculator</h1>
    <form action="/calculate" method="post">
        @csrf
        <div class="form-group">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" id="num1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="num2">Number 2:</label>
            <input type="number" name="num2" id="num2" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select name="operation" id="operation" class="form-control">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    @if(isset($result))
    <div class="alert alert-success mt-3">
        Result: {{ $result }}
    </div>
    @endif
</div>