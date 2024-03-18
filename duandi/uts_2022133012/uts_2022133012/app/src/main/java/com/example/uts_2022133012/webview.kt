package com.example.uts_2022133012

import android.os.Build
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.webkit.WebView
import android.webkit.WebViewClient
import android.widget.ImageView
import androidx.annotation.RequiresApi

class webview : AppCompatActivity() {

    private lateinit var back: ImageView
    private lateinit var webuvers: WebView


    @RequiresApi(Build.VERSION_CODES.O)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_uversweb)

        webuvers = findViewById(R.id.web)
        webViewsetup()

        back = findViewById(R.id.backButton)

        back.setOnClickListener{
            onBackPressed()
        }
    }

    @RequiresApi(Build.VERSION_CODES.O)
    private fun webViewsetup(){
        webuvers.webViewClient = WebViewClient()
        webuvers.apply {
            loadUrl("http://uvers.ac.id")
            settings.javaScriptEnabled = true
            settings.safeBrowsingEnabled = true
        }

    }
}