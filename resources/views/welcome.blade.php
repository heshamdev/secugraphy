@extends('layouts.main')
@section('headers')
<script type="text/javascript" src = "{{asset('js/map.js')}}"></script>
@endsection
@section('main')
<div class = "row" style="margin-top: 30px;">
    <div class = "row">
        <center>
        <div class="switch">
            <label>
                <span class = "light-green-text knocks-lock9 text-accent-2" style="font-size: 200%;"></span>
                <input type="checkbox" v-model = "enc">
                <span class="lever"></span>
                <span class = "light-green-text knocks-lock-open3 text-accent-2" style="font-size: 200%;"></span>
            </label>
        </div>
        </center>
    </div>
    <transition enter-active-class = "animated pulse infinite" leave-active-class = "animated fadeOut">
        <div class = "row" v-if = "input.length > 0 && key.length > 0 && encrypted.length > 0">
            <div class="ui labeled button right" tabindex="0" @click = "input = encrypted ">
                <div class="ui basic positive button">
                    Paste Result
                </div>
                <a class="ui basic left pointing positive label">
                    <i class="knocks-clipboard2 light-green-text"></i>
                </a>
            </div>        
        </div>
        </transition>
        <div class="input-field row">
            <i class="knocks-pencil9 prefix"></i>
            <textarea id="icon_prefix" type="text" class="validate materialize-textarea" v-model = "input"></textarea>
            <label for="icon_prefix">Text</label>
        </div>
        <div class="input-field row">
            <i class="knocks-key13 prefix"></i>
            <textarea id="icon_prefix" type="text" class="validate materialize-textarea" v-model = "key"></textarea>
            <label for="icon_prefix">Key</label>
        </div>
        <transition enter-active-class = "animated pulse infinite" leave-active-class = "animated fadeOut">
            <div v-if = "input.length == 0"><code class = "red-text" >Waiting your text ..</code></div>
        </transition>
        <transition enter-active-class = "animated pulse infinite" leave-active-class = "animated fadeOut">
            <div v-if = "key.length == 0"><code class = "red-text" >Waiting your key ..</code></div>
        </transition>
        <transition enter-active-class = "animated pulse infinite" leave-active-class = "animated fadeOut">
            <div class = "row" style="margin-top: 30px;" v-if = "input.length > 0 && key.length > 0 && encrypted.length > 0">
                <span style="font-size: 200%;">Encrypted</span>
                <h4 class="ui horizontal divider header light-green-text text-accent-2 transparent">
                <i class="knocks-align-right4 light-green-text text-accent-2" style="font-family: 200%;"></i>
                Ceaser Cipher
                </h4>
                <div class = "col s12">
                    <div class="input-field row">
                        
                        <textarea id="enctest" type="text" :disabled = "!hoverEnc"
                        class=" materialize-textarea light-green-text text-accent-2"
                        style="font-family: 200%;" :value = "encrypted"></textarea>
                        
                    </div>
                </div>
                <div class = "col s12">
                    <div class="ui labeled button right" tabindex="0" @click = "copyEncrypted()" @mouseover = 'encToggle(true)' @mouseleave = 'encToggle(false)'>
                        <div class="ui basic positive button">
                            Copy
                        </div>
                        <a class="ui basic left pointing positive label">
                            <i class="knocks-copy2 light-green-text"></i>
                        </a>
                    </div>
                </div>
            </div>
        </transition>
        <transition enter-active-class = "animated pulse infinite" leave-active-class = "animated fadeOut">
            <div class = "row" style="margin-top: 30px;" v-if = "input.length > 0 && key.length > 0 && encrypted.length > 0">
                <span style="font-size: 200%;">Hashed</span>
                <h4 class="ui horizontal divider header light-green-text text-accent-2 transparent">
                <i class="knocks-hash light-green-text text-accent-2" style="font-family: 200%;"></i>
                Hashed Cipher
                </h4>
                <div class = "col s12">@{{hashed}}</div>
            </div>
        </transition>
    </div>
</div>
@endsection