package com.example.uts_2022133012

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.ImageView

class Edittext : AppCompatActivity() {

    private lateinit var back: ImageView

    private lateinit var e_nama: EditText
    private lateinit var e_gajip: EditText
    private lateinit var e_tunjangan: EditText
    private lateinit var h_nama: EditText
    private lateinit var h_gajip: EditText
    private lateinit var h_tunjangan: EditText
    private lateinit var total: EditText
    private lateinit var ht: Button

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_gaji)

        back = findViewById(R.id.backButton)

        back.setOnClickListener{
            onBackPressed()
        }

        e_nama= findViewById(R.id.editnama)
        e_gajip= findViewById(R.id.editgaji)
        e_tunjangan= findViewById(R.id.edittunjangan)
        h_nama= findViewById(R.id.hasilnama)
        h_gajip= findViewById(R.id.hasilgajipokok)
        h_tunjangan= findViewById(R.id.hasiltunjangan)
        total= findViewById(R.id.totalgaji)
        ht= findViewById(R.id.hitung)

        ht.setOnClickListener{
            h_nama.setText(e_nama.text.toString())
            h_gajip.setText(e_gajip.text.toString())
            h_tunjangan.setText(e_tunjangan.text.toString())

            val pokok = e_gajip.text.toString()
            val tunjangan = e_tunjangan.text.toString()
            val gtotal = pokok.toFloat()- ((pokok.toFloat())*0.05)+tunjangan.toFloat()



            total.setText(gtotal.toString())

        }

    }
}