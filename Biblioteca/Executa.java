
import java.util.Date;
public class Executa
{
    public static void main(String args[]){
    // variáveis de instância - substitua o exemplo abaixo pelo seu próprio
    Pessoa jose = new Pessoa("jose","05/04/1975");
    Aluno maria = new Aluno("Maria", "06/07/2020", 123, "Quimica");
    Professor carlos = new Professor("Carlos", "11/11/1976", "Doutor", "06/05/2005");
    
    System.out.println("Nome = "+ jose.getNome() + "- Data de Nascimento =" + jose.getDataNasc());
    System.out.println("Nome = "+ maria.getNome() + "- Data de Nascimento =" + maria.getDataNasc() + "RA: "+ maria.getRa() + "Curso: "+ maria.getCurso());
    System.out.println("Nome = "+ carlos.getNome() + "- Data de Nascimento =" + carlos.getDataNasc() + "RA: "+ carlos.getTitulacao() + 
    "Curso: "+ carlos.getDataContratacao());
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    

    
    }
}

