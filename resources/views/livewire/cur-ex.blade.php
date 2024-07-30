<div>
    <br>
    <div class="container mt-5">
        <h1 class="text-center">货币互换 (美元)</h1>
        <h1 class="text-center">Currency Exchange (to USD)</h1>

        <form id="CurexForm" class="mt-4" wire:submit.prevent="search">
            <div class="form-group">
                <label for="currency">请输入货币类型 (please type in the currency type)</label>
                <input type="text" class="form-control" wire:model:defer="currency" id="currency" placeholder="CAD" required>
                <br>
                <label for="amount">How many of this currency do you want to exchange?</label>
                <input type="text" class="form-control" wire:model:defer="amount" id="amount" placeholder="100" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div id="result" class="mt-4">
            @if ($currencyPrice)
                <div class="alert alert-success">
                    {{$amount}} of {{$currency}} in USD$ is {{$currencyPrice}}$
                </div>
            @endif

            @if ($errorMessage)
                <div class="alert alert-danger">
                    {{ $errorMessage }}
                </div>
            @endif
        </div>
    </div>
</div>
