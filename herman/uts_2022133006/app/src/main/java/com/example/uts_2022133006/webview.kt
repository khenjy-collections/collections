package com.example.uts_2022133006

import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.webkit.WebView
import android.webkit.WebViewClient
import androidx.annotation.RequiresApi

class webview : AppCompatActivity() {

    private lateinit var webview: WebView

    @RequiresApi(Build.VERSION_CODES.O)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_webtpl)

        webview = findViewById(R.id.webtpl)
        webviewsetup()
    }
    @RequiresApi(Build.VERSION_CODES.O)

    private fun webviewsetup(){
        webview.webViewClient = WebViewClient()
        webview.apply {
            loadUrl("http://uvers.ac.id")
            settings.javaScriptEnabled = true
            settings.safeBrowsingEnabled = true
        }
    }
}