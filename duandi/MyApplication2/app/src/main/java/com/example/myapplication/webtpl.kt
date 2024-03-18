package com.example.myapplication

import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.webkit.WebView
import android.webkit.WebViewClient
import androidx.annotation.RequiresApi

class webtpl : AppCompatActivity() {

    private lateinit var webtpl: WebView

    @RequiresApi(Build.VERSION_CODES.O)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_webtpl)

        webtpl = findViewById(R.id.web)
        webViewsetup()

    }

    @RequiresApi(Build.VERSION_CODES.O)
    private fun webViewsetup(){
        webtpl.webViewClient = WebViewClient()
        webtpl.apply {
            loadUrl("https://youtube.com")
            settings.javaScriptEnabled = true
            settings.safeBrowsingEnabled = true
        }

    }
}