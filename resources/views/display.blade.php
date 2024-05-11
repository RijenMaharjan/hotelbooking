 @if(Session::has('success'))
    <div id='sucessalert' class='sucessalert'>
                <p class='alert-heading'>{{session('success')}}</p>
                <button class='close-btn'  onclick='closeCustomAlert()'>&times;</button>
            </div>
    @endif
    @if(Session::has('succes'))
    <div id='sucessalert' class='sucessalert'>
                <p class='alert-heading'>{{session('succes')}}</p>
                <button class='close-btn'  onclick='closeCustomAlert()'>&times;</button>
            </div>
    @endif
    @if(Session::has('suc'))
    <div id='sucessalert' class='sucessalert'>
                <p class='alert-heading'>{{session('suc')}}</p>
                <button class='close-btn'  onclick='closeCustomAlert()'>&times;</button>
            </div>
    @endif
    
    @if(Session::has('error'))
    <div id='sucessalert' class='sucessalert'>
                <p class='alert-heading'>{{session('error')}}</p>
                <button class='close-btn'  onclick='closeCustomAlert()'>&times;</button>
            </div>
    @endif
