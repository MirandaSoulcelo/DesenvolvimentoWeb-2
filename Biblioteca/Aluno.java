
/**
 * Escreva uma descrição da classe Aluno aqui.
 * 
 * @author (seu nome) 
 * @version (um número da versão ou uma data)
 */
public class Aluno extends Pessoa
{
    // variáveis de instância - substitua o exemplo abaixo pelo seu próprio
  private int Ra;
  private String Curso;
    
    
    

    /**
     * Construtor para objetos da classe Aluno
     */
    public Aluno(String nome, String data,int ra, String curso)
    {
        super(nome, data);
        Ra = ra;
        Curso = curso;
        
        
    }

    /**
     * Um exemplo de um método - substitua este comentário pelo seu próprio
     * 
     * @param  y   um exemplo de um parâmetro de método
     * @return     a soma de x e y 
     */
    public int getRa()
    {
        // escreva seu código aqui
        return Ra;
    }
    public void setRa(int ra)
    {
        this.Ra = ra;
    }
    
    public String getCurso()
    {
        return Curso;
    }
    
    public void setCurso(String curso)
    {
        this.Curso = curso;

    }
    public void RetiraLivro(){}
}
