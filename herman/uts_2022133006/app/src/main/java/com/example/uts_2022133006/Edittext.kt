package com.example.uts_2022133006

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView

class Edittext : AppCompatActivity() {
    private lateinit var edit_nama: EditText
    private lateinit var edit_gajipokok: EditText
    private lateinit var edit_tunjangan: EditText
    private lateinit var nama: TextView
    private lateinit var gajipokok: TextView
    private lateinit var tunjangan: TextView
    private lateinit var totalgaji: TextView
    private lateinit var hitungBtn: Button
    private lateinit var resetBtn: Button

    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_edittext)

        edit_nama= findViewById(R.id.editnamaKaryawan)
        edit_gajipokok= findViewById(R.id.editgajiPokok)
        edit_tunjangan= findViewById(R.id.edittunjangan)
        nama= findViewById(R.id.textNama)
        gajipokok= findViewById(R.id.textGajikaryawan)
        tunjangan= findViewById(R.id.textTunjangan)
        totalgaji= findViewById(R.id.textTotalgaji)
        hitungBtn= findViewById(R.id.Hitung)
        resetBtn = findViewById(R.id.Reset)

        hitungBtn.setOnClickListener{
            nama.setText(edit_nama.text.toString())
            gajipokok.setText(edit_gajipokok.text.toString())
            tunjangan.setText(edit_tunjangan.text.toString())

            val pokok = edit_gajipokok.text.toString()
            val tunjangan = edit_tunjangan.text.toString()
            val gtotal = pokok.toFloat()- ((pokok.toFloat())*0.05)+tunjangan.toFloat()

            totalgaji.setText(gtotal.toString())
        }
        resetBtn.setOnClickListener{
            nama.setText("Nama")
            gajipokok.setText("Gaji Pokok")
            tunjangan.setText("Tunjangan")
            totalgaji.setText("Total Gaji")



            }

        }
}