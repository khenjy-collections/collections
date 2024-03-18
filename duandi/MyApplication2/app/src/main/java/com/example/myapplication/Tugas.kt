package com.example.myapplication

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText

class Tugas : AppCompatActivity() {

    private lateinit var Hemas: EditText
    private lateinit var Nemas: EditText
    private lateinit var Jemas: EditText
    private lateinit var Biaya: EditText
    private lateinit var Harga: EditText
    private lateinit var Jumlah: EditText
    private lateinit var Total: EditText
    private lateinit var hitung: Button
    private lateinit var reset: Button

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_tugas)

        Hemas= findViewById(R.id.hemas)
        Nemas= findViewById(R.id.nemas)
        Jemas= findViewById(R.id.jemas)
        Biaya= findViewById(R.id.biaya)
        Harga= findViewById(R.id.Harga)
        Jumlah= findViewById(R.id.Jumlah)
        Total= findViewById(R.id.Total)
        hitung= findViewById(R.id.hitung)
        reset= findViewById(R.id.reset)

        hitung.setOnClickListener{
            val Hemas = Hemas.text.toString()
            val Karat = Nemas.text.toString()
            val Jemas = Jemas.text.toString()
            val biaya = Biaya.text.toString()
            Jumlah.setText(Jemas.toString())

            val Harga_emas = (Hemas.toFloat() * (Karat.toFloat()/24))
            Harga.setText(Harga_emas.toString())

            val Total_emas = (Harga_emas.toFloat() * Jemas.toFloat()) + (biaya.toFloat() * Jemas.toFloat())

            Total.setText(Total_emas.toString())
        }
    }
}