<div>
    <style>
        #result-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin-top: 20px;
        }
        .round-button {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        .round-button:hover {
            background-color: #0056b3;
        }
    </style>
    <br>
    <div class="container mt-5">
        <h1 class="text-center mb-4">我的 IP 地址是什么？</h1>
        <h1 class="text-center mb-4">What's my IP address?</h1>
        <form id="currentIPform" class="mt-4" wire:submit.prevent="search">
            <div style="text-align: center; margin-top: 10px;">
                <button type="submit" class="round-button">Submit</button>
            </div>
        </form>
    </div>  
    <div id="result-container">
        <div id="result">
            @if ($ip)
                <div class="alert alert-success">
                    Your current IP is: {{$ip}}
                </div>
            @endif
        </div>
    </div>
</div>
