package com.example.uts_2022133012

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.LinearLayout

class MainActivity : AppCompatActivity() {

    private lateinit var i_galeri:LinearLayout
    private lateinit var i_web:LinearLayout
    private lateinit var i_gaji: LinearLayout

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        i_galeri = findViewById(R.id.Galeri)
        i_web = findViewById(R.id.web_uvers)
        i_gaji = findViewById(R.id.gaji)

        i_galeri.setOnClickListener{
            startActivity(Intent(this, Scrollview::class.java))
        }

        i_web.setOnClickListener{
            startActivity(Intent(this, webview::class.java))
        }

        i_gaji.setOnClickListener{
            startActivity(Intent(this, Edittext::class.java))
        }


    }
}