package com.example.uts_2022133012

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageView

class Scrollview : AppCompatActivity() {

    private lateinit var back: ImageView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_galeri)


        back = findViewById(R.id.backButton)

        back.setOnClickListener{
            onBackPressed()
        }

    }
}