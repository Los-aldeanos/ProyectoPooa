/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemabaneos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Jesus David
 */
public final class Baneos {
    int id_baneos;
    String motivo;
    int id;
    double numero;
    int time;
    Baneos(int id_usuario,String motivo) {
        this.id=id_usuario;
        if ("DM".equals(motivo)){
            this.motivo=motivo;
            this.time=259200;
        }
        if ("DMCAR".equals(motivo)){
            this.motivo=motivo;
            this.time=259200;
        }
        
        if ("DMO".equals(motivo)){
            this.motivo=motivo;
            this.time=259200;
        }
        
        if ("DM Masivo".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
        
        if ("DMCAR Masivo".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
        
        if ("DMO Masivo".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
        
        if ("RK".equals(motivo)){
            this.motivo=motivo;
            this.time=172800;
        }
        
        if ("PG".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("MG".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("ER".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("ERE".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("TK".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("RF".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("BD".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("NPA".equals(motivo)){
            this.motivo=motivo;
            this.time=172800;
        }
        
        if ("Troll".equals(motivo)){
            this.motivo=motivo;
            this.time=604800;
        }
        
        if ("IOOC".equals(motivo)){
            this.motivo=motivo;
            this.time=43200;
        }
        
        if ("Abuso de Bugs".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
                
        if ("Usar Hacks".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
        
        if ("Mentir al STAFF".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
        
        if ("Estafar".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
        
         if ("Incumplir politicas".equals(motivo)){
            this.motivo=motivo;
            this.time=1;
        }
    }

   
       void updateDB(){
        try {
            
            Connection con=DriverManager.getConnection("jdbc:derby://localhost:1527/ProyectoPOOA","ProyectoPOOA","ProyectoPOOA");
            
            Statement instrucciones=con.createStatement();
            
            String sql="UPDATE usuarios SET timeban="+time+" WHERE id_discord="+id;
            instrucciones.executeUpdate(sql);
            
            con.close();
        } catch (SQLException ex) {
            System.out.println("No llego");
        }
    }
    
    Baneos() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    Baneos(String motivo, int id) {
       this.motivo=motivo;
       this.id_baneos=id;
    }

    @Override
    public String toString() {
        return motivo;
    }
    public void ban(){
        updateDB();
        
    }
    
    
    
    
}
