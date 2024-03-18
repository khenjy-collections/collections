package com.example.uts_2022133006

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button

class MainActivity : AppCompatActivity() {

    private lateinit var fotoTPL:Button
    private lateinit var web:Button
    private lateinit var gaji:Button

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        fotoTPL = findViewById(R.id.scrollView)
        web = findViewById(R.id.webViews)
        gaji = findViewById(R.id.editText)

        fotoTPL.setOnClickListener {
            startActivity(Intent(this, Scrollview::class.java ))
        }
        web.setOnClickListener {
            startActivity(Intent(this, webview::class.java))
        }
        gaji.setOnClickListener {
            startActivity(Intent(this, Edittext::class.java))
            }


        }
}