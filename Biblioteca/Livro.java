
public class Livro
{
    private String Nome;
    private String Editora;
    private int Isbn;

    /**
     * Construtor para objetos da classe Livro
     */
    public Livro(String nome, String editora, int isbn)
    {
        Nome = nome;
        Editora = editora;
        Isbn = isbn;
        
    }

    
    public String getNome()
    {
        // escreva seu código aqui
        return Nome;
    }
    
    
    public void setNome(String nome)
    {
        this.Nome = nome;
    }
    
    public String getEditora()
    {
        return Editora;
    }
    
    public void setEditora(String editora)
    {
        this.Editora = editora;
    }
    
    public int getIsbn()
    {
        return Isbn;
    }
    
    public void setIsbn(int isbn)
    {
        this.Isbn = isbn;
    }
}
