package com.example.myapplication

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.Button
import androidx.appcompat.app.AppCompatActivity


class MainActivity : AppCompatActivity() {

    private lateinit var hitungnilai: Button
    private lateinit var emas: Button
    private lateinit var mhs:Button
    private lateinit var web:Button


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        mhs = findViewById(R.id.mhs)

        mhs.setOnClickListener{
            startActivity(Intent(this, scroll::class.java))
        }

        hitungnilai=findViewById(R.id.hitungnilai)

        hitungnilai.setOnClickListener {
            startActivity(Intent(this, htnilai::class.java))
        }

        emas=findViewById(R.id.emas)
        emas.setOnClickListener{
            startActivity(Intent(this, Tugas::class.java))
        }

        web=findViewById(R.id.webtpl)

        web.setOnClickListener {
            startActivity(Intent(this, webtpl::class.java))
        }
    }



}